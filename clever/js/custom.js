//custom js goes here
	    $.getJSON("http://richbray.me/clever/search.json", function(data) {
	        console.log("[search.json loaded for random posts]");

	        var postsCount = data.length;

	        console.log(postsCount);
	        var posts = data;

	        var randomIndexUsed = [];
	        var counter = 0;
	        var numberOfPosts = 1;

	        var divRandomPosts = $("#random_posts");

	        while (counter < numberOfPosts)
	        {
	            var randomIndex = Math.floor(Math.random() * postsCount);

	            if (randomIndexUsed.indexOf(randomIndex) == "-1")
	            {
	                var postHREF = posts[randomIndex].href;
	                var postTitle = posts[randomIndex].title;
	                var postDefinition = posts[randomIndex].definition;
	                var postSynonyms = posts[randomIndex].synonyms;
	                var postExample1 = posts[randomIndex].example1;
	                var postExample2 = posts[randomIndex].example2;

	                if (counter == (numberOfPosts - 1)) {
	                    divRandomPosts.append('<h1 class="mt-1 mb-0_5">“' + postTitle + '”</h1>' + '<h3 class="mb-1">' + postDefinition + '</h3>' + '<p> <em class="fz-1_2">' + postSynonyms + '</em> </p>' + '<ul class="sentences"> <li>' + postExample1 + '</li><li>' + postExample2 + '</li></ul>');
	                }
	                else {
	                    divRandomPosts.append('<p><a href="' + postHREF + '">' + postTitle + '</a></p><hr />');
	                }

	                randomIndexUsed.push(randomIndex);

	                counter++;
	            }
	        }
	    });
	    
	    
		$( "#admin_text" ).on( "click", function() {
			$( "#menu" ).fadeToggle( "fast" );
		});
		
		$( "#random_posts" ).on( "click", function() {
			$( "#menu" ).fadeOut( "fast" );
		});	