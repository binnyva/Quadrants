function init() {
	$(".question-score").change(function() {
		var ele = $(this);
		var class_name = ele.attr('class');

		// Highlights the Repeats
		var val = ele.val();
		var count = [0,0,0,0,0,0];
		$(".question-score").each(function() {
			var elem = $(this);
			var this_val = elem.val();
			if(this_val == val) {
				elem.addClass("repeats");
			} else {
				elem.removeClass("repeats");
			}
			count[this_val]++
		});
		// Shows the selection count
		for(var i=0;i<6;i++) {
			var elem = $("#count-"+i);
			elem.text(count[i]);
			if(count[i] > 6) {
				elem.addClass("over");
			} else {
				elem.removeClass("over");
			}
		}
		
		// Sum up things for each segment.
		var quadrant = class_name.replace(/.*question\-([rl][12]).*/g, "$1");
		totaler(quadrant);
	});

	$("form").submit(function(e) {
		if($("#name").val() == "") {
			$("#name").focus();
			alert("Enter your name, bro.");
			e.stopPropagation();
			return false;	
		}

		var count = [0,0,0,0,0,0];
		$(".question-score").each(function() {
			var this_val = $(this).val();
			count[this_val]++
		});

		var over = [];
		// Shows the selection count
		for(var i=0;i<6;i++) {
			if(count[i] > 6) {
				over.push(i);
			}
		}

		if(over.length) {
			alert("These number have appeared more than 6 times: " + over.join(","));
			e.stopPropagation();
			return false;
		}
	});

	var quadrants = ['l1', 'l2', 'r1','r2'];
	for(var i in quadrants) totaler(quadrants[i]);
}

function totaler(quadrant) {
	var total = 0;
	$(".question-"+quadrant).each(function() {
		var val = Number($(this).val());
		total += val;
	});

	$("#score-"+quadrant).val(total);
}