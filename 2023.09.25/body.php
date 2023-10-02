<body>
    <div class="container">
        <?php
        require_once('menu.php');
        switch ($menuItem) {
            case 'home':
                require_once('home.php');
                break;
            case 'termekek':
                require_once('termekek.php');
                break;
            case 'login':
                require_once('login.php');
                break;
            default:
                echo "Üdv";
                break;
        }
        ?>
    </div>
    <h1>Welcome</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>