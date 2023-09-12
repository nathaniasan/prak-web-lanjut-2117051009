<!-- FOOTER -->
<footer class="footer text-white text-center pb-5">
    <p>
        Credit <i class="bi bi-heart-fill text-danger"></i> by
        <a href="https://www.instagram.com/lolipoppenak_/" class="text-whiteb fw-bold link"> Nathan </a>
    </p>
</footer>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<script>
    const scriptURL = "https://script.google.com/macros/s/AKfycbxFCzCRlhnFwQT71Az6SyzTOTY8EHqKwYcBWxv6KVkBUdTKPM07T9lbiMR2vfbvXrEtyg/exec";
    const form = document.forms["tokonbc-contact-form"];

    form.addEventListener("submit", (e) => {
        e.preventDefault();
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
            .then((response) => console.log("Success!", response))
            .catch((error) => console.error("Error!", error.message));
    });
</script>
</body>

</html>