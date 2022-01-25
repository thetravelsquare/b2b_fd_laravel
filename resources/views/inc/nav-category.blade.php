<style>
    #nav {
        list-style: none inside;
        margin: 0;
        padding: 0;
        text-align: left;
        color: #6c757d!important;
        position: fixed;
        background: #fff;
        width: 100% !important; 
        z-index: 999;
        border-bottom: 1px solid rgb(208, 200, 200);
    }
    #nav li {
        /* z-index: 9999; */
        display: block;
        position: relative;
        float: left;
        background: #fff;
    }
    #nav li a {
        margin-left: 10px;
        text-align: center;
        display: block;
        padding: 0;
        text-decoration: none;
        width: 180px;
        line-height: 30px;
        color: black;
    }
    #nav li a:hover {
        color: #0071df;
    }
    #nav li li a {
        font-size: 80%;
    }
    #nav li:hover {
        background: #fff;
    }
    #nav ul {
        border: 1px solid rgb(208, 200, 200);
        position: absolute;
        padding: 0;
        left: 0;
        display: none;
    }
    #nav li:hover ul ul {
        display: none;
    }
    #nav li:hover ul {
        display: block;
    }
    #nav li li:hover ul {
        display: block;
        margin-left: 190px;
        margin-top: -35px;
    }
</style>
<header class="text-center" style="margin-top: 90px;">
    <ul class="d-flex justify-content-center" id="nav">
        <li><a class="normal-font font-weight-bold" href="#">Shop By Brands</a>
            <ul>
                <li><a href="#">Beverages</a>
                    <ul>
                        <li><a href="#">Coca Cola</a></li>
                        <li><a href="#">Parle</a></li>
                        <li><a href="#">Thumbs Up</a></li>
                        <li><a href="#">Slice</a></li>
                        <li><a href="#">Pepsico</a></li>
                        <li><a href="#">Sprite</a></li>
                        <li><a href="#">Maaza</a></li>
                        <li><a href="#">Limca</a></li>
                        <li><a href="#">Fanta</a></li>
                        <li><a href="#">Schweppes</a></li>
                        <li><a href="#">Mountain Dew</a></li>
                        <li><a href="#">Seven Up</a></li>
                        <li><a href="#">Tropicana</a></li>
                        <li><a href="#">Minute Maid</a></li>
                        <li><a href="#">Raw Pressury</a></li>
                        <li><a href="#">Coconut Water</a></li>
                    </ul>
                </li>
                <li><a href="#">Packaged Water Brands</a>
                    <ul>
                        <li><a href="#">Aquafina</a></li>
                        <li><a href="#">Bisleri</a></li>
                        <li><a href="#">Kinley</a></li>
                        <li><a href="#">Himalayan</a></li>
                        <li><a href="#">Patanjali Divya Jal</a></li>
                        <li><a href="#">Euro Pure</a></li>
                        <li><a href="#">Bailley</a></li>
                        <li><a href="#">Amruttam</a></li>
                    </ul>
                </li>
                <li><a href="#">Energy Drinks</a>
                    <ul>
                        <li><a href="#">Monster</a></li>
                        <li><a href="#">Redbull</a></li>
                        <li><a href="#">Gatorade</a></li>
                    </ul>
                </li>
                <li><a href="#">Premium Water Brands</a>
                    <ul>
                        <li><a href="#">Evocus</a></li>
                        <li><a href="#">Himalayan</a></li>
                        <li><a href="#">Alkalen</a></li>
                        <li><a href="#">Vedica</a></li>
                        <li><a href="#">Glaceau Smart Water</a></li>
                    </ul>
                </li>
                <li><a href="#">Coffee Vending Machine</a></li>
                <li><a href="#">RO Water Purifier</a></li>
            </ul>
        </li>
        <li><a class="normal-font font-weight-bold" href="#">Packaged Drinking Water</a>
            <ul>
                <li><a href="#">20 Litre Water Jar</a>
                    <ul>
                        <li><a href="#">1 Month Subscription</a></li>
                    </ul>
                </li>
                <li><a href="#">2 Litre Water Bottles</a></li>
                <li><a href="#">1 Litre Water Bottles</a></li>
                <li><a href="#">500ml Water Bottles</a></li>
                <li><a href="#">300ml Water Bottles</a></li>
                <li><a href="#">250ml Water Bottles</a></li>
            </ul>
        </li>
        <li><a class="normal-font font-weight-bold" href="#">Beverages</a>
            <ul>
                <li><a href="#">Soda Water</a></li>
                <li><a href="#">Energy Drinks</a></li>
                <li><a href="#">Soft Drinks</a></li>
                <li><a href="#">Flavored Drinks</a></li>
                <li><a href="#">Fruit Juices</a></li>
            </ul>
        </li>
        <li><a class="normal-font font-weight-bold" href="#">Premium Water</a></li>
        <li><a class="normal-font font-weight-bold" href="#">Snacks</a>
            <ul>
                <li><a href="#">Biscuits</a></li>
            </ul>
        </li>
    </ul>
</header>