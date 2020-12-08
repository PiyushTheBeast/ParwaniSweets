    <!-- Footer -->
    <div class="footer" id="#about">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our app</h3>
                    <p>Download our app for adroid and ios</p>
                    <div class="app-logo">
                        <img src="images/icon.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo.jpg">
                    <p>Write motto here</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us on</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright2020- Parwani Group</p>
        </div>
    </div>
    <!-- js for toggle menu -->
    <script>
        var MenuItems= document.getElementById("menuitems");
        MenuItems.style.maxheight="0px";
        function menutoggle(){
            if(MenuItems.style.maxheight=="0px"){
                MenuItems.style.maxheight="200px"
            }
            else{
                MenuItems.style.maxheight="0px"
            }
        }
    </script>
    <script>
        function details() {
            location.replace("./productdetail.html");
        }
    </script>
</body>
</html>