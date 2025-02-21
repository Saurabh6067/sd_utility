function haversine(lat1, lon1, lat2, lon2) {
	const R = 6371; // Radius of the Earth in kilometers
	const toRadians = (angle) => (angle * Math.PI) / 180;

	// Convert latitudes and longitudes from degrees to radians
	const lat1Rad = toRadians(lat1);
	const lon1Rad = toRadians(lon1);
	const lat2Rad = toRadians(lat2);
	const lon2Rad = toRadians(lon2);

	// Calculate the differences between latitudes and longitudes
	const dLat = lat2Rad - lat1Rad;
	const dLon = lon2Rad - lon1Rad;

	// Apply the Haversine formula
	const a =
		Math.sin(dLat / 2) * Math.sin(dLat / 2) +
		Math.cos(lat1Rad) *
			Math.cos(lat2Rad) *
			Math.sin(dLon / 2) *
			Math.sin(dLon / 2);
	const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
	const distance = R * c; // Distance in kilometers

	return distance;
}

// Example usage:
const lat1 = 28.627981;
const lon1 = 77.3648567;
const lat2 = 28.6287001;
const lon2 = 77.3814695;

const distance = haversine(lat1, lon1, lat2, lon2);
console.log(`Distance: ${distance.toFixed(2)} km`);
