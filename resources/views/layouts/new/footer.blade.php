<script>
    function toggleMobileSideNav() {
        var element = document.getElementById("mobile-side-nav");
        if (element.classList.contains("left-[-100%]")) {
            element.classList.remove("left-[-100%]");
            element.classList.add("left-0");
        } else {
            element.classList.remove("left-0");
            element.classList.add("left-[-100%]");
        }
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
