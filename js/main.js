import { fetchData} from "./modules/DataMiner.js";

(()=> {


let vue_vm = new Vue({

	data: {
		currentImageData:{},
		galleryImages:[]


	},

	mounted: function() {
		console.log("Vue has been mounted! Congrats!");
		fetchData("./includes/image_index.php").then(data => this.galleryImages = data).catch(err => console.error(err));
	},

	updated: function () {
		console.log('Vue has updated the DOM!')
	},

	methods: {
		showImageData(target) {
			console.log("viewed this image data", target, target.name);
		}
	}


}).$mount("#imageMount");

let vue_vm2 = new Vue({

	data: {
		currentVideoData:{},
		galleryVideos:[]
	},

	mounted: function() {
		console.log("Vue has been mounted! Congrats!");
		fetchData("./includes/video_index.php").then(data => this.galleryVideos = data).catch(err => console.error(err));
	},

	updated: function () {
		console.log('Vue has updated the DOM!')
	},

	methods: {
		showImageData(target) {
			console.log("viewed this image data", target, target.name);
		}
	}


}).$mount("#videoMount");




})();
