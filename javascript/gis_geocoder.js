/*
 * L.Geocoder is used to make geocoding or reverse geocoding requests.
 */

L.Geocoder = L.Class.extend({

	includes: L.Mixin.Events,

	options: {
		forwardUrl: L.geocoderConfig.forwardUrl,
		reverseUrl: L.geocoderConfig.reverseUrl,
		limit: 1,
		acceptLanguage:'fr',
		addressdetails: 1
	},

	initialize: function (callback, options) {
		L.Util.setOptions(this, options);
		this._user_callback = callback;
	},

	geocode: function (data) {
		if (L.LatLng && (data instanceof L.LatLng)) {
			this._reverse_geocode(data);
		} else if (typeof(data) == 'string') {
			this.options.search = data;
			this._geocode(data);
		}
	},

	_geocode: function (text) {
		this._request(
			this.options.forwardUrl,
			{
				format: 'json',
				q: text,
				limit: this.options.limit,
				addressdetails: this.options.addressdetails,
				"accept-language":this.options.acceptLanguage
			}
		);
	},

	_reverse_geocode: function (latlng) {
		this._request(
			this.options.reverseUrl,
			{
				format: 'json',
				lat: latlng.lat,
				lon: latlng.lng
			}
		);
	},

	_request: function (url, data) {
		jQuery.ajax({
			cache: true,
			context: this,
			data: data,
			dataType: 'jsonp',
			jsonp: 'json_callback',
			success: this._callback,
			url: url
		});
	},
	
	_callback: function (response,textStatus,jqXHR) {
		var return_location = {};
		if(this.options.search)
			return_location.search = this.options.search;
		if (response instanceof Array && !response.length) {
			return_location.error = 'not found';
		} else {
			return_location.street = return_location.postcode = return_location.postcode = 
			return_location.locality = return_location.region = return_location.country  = '';

			if (response.length > 0)
				place = response[0];
			else {
				place = response;
			}

			var street_components = [];

			if (place.address.country) {
				return_location.country = place.address.country;
			}
			if (place.address.country_code) {
				return_location.country_code = place.address.country_code;
			}
			if (place.address.state) {
				return_location.region = place.address.state;
			}
			//un jour peut-être…
			/*
			if (place.address.county) {
				return_location.departement = place.address.county;
			}
			*/
			if (place.address.city) {
				return_location.locality = place.address.city;
			} else if (place.address.town) {
				return_location.locality = place.address.town;
			} else if (place.address.village) {
				return_location.locality = place.address.village;
			} else if (place.address.county) {
				street_components.push(place.address.county);
			}
			if (place.address.postcode) {
				return_location.postcode = place.address.postcode;
			}
			if (place.address.road) {
				street_components.push(place.address.road);
			}else if(place.address.pedestrian){
				street_components.push(place.address.pedestrian);
			}
			if (place.address.house_number) {
				street_components.unshift(place.address.house_number);
			}
			
			if (return_location.street === '' && street_components.length > 0) {
				return_location.street = street_components.join(' ');
			}
			
			return_location.point = new L.LatLng(place.lat, place.lon);
		}
		this._user_callback(return_location);
	}
});
