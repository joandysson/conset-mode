<!-- https://cdn.jsdelivr.net/npm/html-minifier-terser@7.2.0/dist/htmlminifier.umd.bundle.min.js -->
<script src="<?php echo asset('js/libs/htmlminifier.umd.bundle.min.js'); ?>"></script>
<!-- https://cdn.jsdelivr.net/npm/source-map@0.7.3/dist/source-map.js -->
<script src="<?php echo asset('js/libs/source-map.js'); ?>"></script>
<!-- https://cdn.jsdelivr.net/npm/terser/dist/bundle.min.js -->
<script src="<?php echo asset('js/libs/terser.bundle.min.js'); ?>"></script>

<script src="<?php echo asset('js/scripts.js?v=0.0.5'); ?>"></script>

<script>
    // Start web app

    const addBtns = document.getElementsByClassName('install-app');
    error = false;
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register(<?php echo '"' . asset('js/sw.js?v=1') . '"' ?>).then(function(reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        })
    }

    function isPWA() {
        return window.matchMedia('(display-mode: standalone)').matches
    }

    function setButtonWPA(e) {
        for (let addBtn of addBtns) {
            // Prevent Chrome 67 and earlier from automatically showing the prompt
            e.preventDefault();
            // Stash the event so it can be triggered later.
            deferredPrompt = e;
            // Update UI to notify the user they can add to home screen
            // addBtn.style.setProperty('display', 'block', 'important');

            addBtn.addEventListener("click", (e) => {
                e.preventDefault();

                // Show the prompt
                deferredPrompt.prompt();
                // Wait for the user to respond to the prompt
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === "accepted") {
                        console.log("User accepted the prompt");
                    } else {
                        console.log("User dismissed the prompt");
                    }
                    deferredPrompt = null;
                });
            });
        }
    }

    function ativeWPA() {
        let deferredPrompt;
        window.addEventListener("beforeinstallprompt", setButtonWPA);
    }

    if (!isPWA()) {
        ativeWPA();
    }

    // End web app
</script>

<!-- <script src="https://cdn.toolz.at/banner-cmp.js" data-toolz-banner-id="019317b5-400d-7114-8f38-7b758e0bd9b9"></script> -->
