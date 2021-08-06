//Passive event listeners///////////////////////////////////////{
//This snippet solves an UX problem :Does not use passive 
//listeners to improve scrolling performance(Lighthouse Report)
//https://stackoverflow.com/questions/60357083/does-not-use-passive-listeners-to-improve-scrolling-performance-lighthouse-repo

  console.log("astra-fixer.js is running");


		jQuery.event.special.touchstart = {
			setup: function(_, ns, handle) {
				this.addEventListener("touchstart", handle, {
					passive: !ns.includes("noPreventDefault")
				});
			}
		};
		jQuery.event.special.touchmove = {
			setup: function(_, ns, handle) {
				this.addEventListener("touchmove", handle, {
					passive: !ns.includes("noPreventDefault")
				});
			}
        };
////////////////////////////////////////////////////////////////////}
