if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('sw.js')
    .then(function(reg){
        console.log("Yes, it did.");
    }).catch(function(err) {
        console.log("No it didn't. This happened: ", err)
    });

    window.addEventListener("load", () => {
        function handleNetworkChange(event) {
            if (navigator.onLine) {
            document.body.classList.remove("offline");
            } else {
            document.body.classList.add("offline");
            }
        }
        window.addEventListener("online", handleNetworkChange);
        window.addEventListener("offline", handleNetworkChange);
    });
      
}