<script>
    window.onload = function() {
        var currentUrl = window.location.href;
        fetch('a.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: 'url=' + encodeURIComponent(currentUrl)
        });
    };
    </script>
