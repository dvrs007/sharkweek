$(document).ready(function(){

	$(window).resize(function() {
        
        if ($(window).width() <= 623) {

        	//set notches

        	var vineNew = document.getElementById("vine_notch");
        	vineNew.style.visibility = "visible"

        	var twitterNew = document.getElementById("twitter_notch");
        	twitterNew.style.visibility = "hidden";

        	var instaNew = document.getElementById("insta_notch");
        	instaNew.style.visibility = "hidden";

        	//set columns

        	var vineColNew = document.getElementById("vine_col");
        	vineColNew.style.display = "block";

        	var twitterColNew = document.getElementById("twitter_col");
        	twitterColNew.style.display = "none";

        	var instaColNew = document.getElementById("insta_col");
        	instaColNew.style.display = "none";


        	$( ".col-title" ).click(function(index) {

        		//get selected ID

        		var currentSelection = index.currentTarget.id;

        		//put selected items into persepctive

        		var chosenNotch = document.getElementById(currentSelection + "_notch");
        		chosenNotch.style.visibility = "visible";

        		var chosenCol = document.getElementById(currentSelection + "_col");
        		chosenCol.style.display = "block";

        		//hide elements not selected

        		var socialClasses = document.getElementsByClassName('col-title');

        		for (i = 0; i < socialClasses.length; i++) { 
        			if(socialClasses[i].id != currentSelection){
        				var otherNotch = document.getElementById(socialClasses[i].id + "_notch");
        				otherNotch.style.visibility = "hidden";

        				var otherFeed = document.getElementById(socialClasses[i].id + "_col");
        				otherFeed.style.display = "none";
        			}
        		}
        	});

        }else{

        	//reset notches

	        var vineInital = document.getElementById("vine_notch");
	        vineInital.style.visibility = "visible";

	        var twitterInital = document.getElementById("twitter_notch");
	        twitterInital.style.visibility = "visible";

	        var instaInital = document.getElementById("insta_notch");
	        instaInital.style.visibility = "visible";

	        //reset columns

	        var vineColInitial = document.getElementById("vine_col");
        	vineColInitial.style.display = "block";

        	var twitterColInitial = document.getElementById("twitter_col");
        	twitterColInitial.style.display = "block";

        	var instaColInitial = document.getElementById("insta_col");
        	instaColInitial.style.display = "block";

        	// $( ".col-title" ).click(function(event){
        	// 	return false;
        	// });
    	}       
    }).resize();  
});