<!DOCTYPE html>
<html lang="en">
<head>
    <title>Taison Digital TEST 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body><!-- Header Showcase -->
<div class="container">
    <div class="header">
        <div><img src="images/logo.png"></div>
    </div>
    <div class="menu">
        <div><a class="active" href="#home">HOME</a></div>
        <div><a href="#about">ABOUT US</a></div>
        <div><a href="#blog">BLOG</a></div>
        <div><a href="#portfolio">PORTFOLIO</a></div>
        <div><a href="#contact">CONTACT US</a></div>
    </div>
    <div class="slider-left"></div>
    <div class="slider">
        <div>
          <img class="" src="images/slider-images/slider1.png">
          <img class="mySlides" src="images/slider-images/slider1.png">
          <img class="mySlides" src="images/slider-images/slider1.png">
          <img class="mySlides" src="images/slider-images/slider1.png">
        </div>
    </div>
    <div class="slider-right"></div>
    <div class="slider-menu">
        <div><img src="images/slider-images/slider1.png" onclick="currentDiv(1)"></div>
        <div><img src="images/slider-images/slider1.png" onclick="currentDiv(1)"></div>
        <div><img src="images/slider-images/slider1.png" onclick="currentDiv(1)"></div>
        <div><img src="images/slider-images/slider1.png" onclick="currentDiv(1)"></div>
        <div><img src="images/slider-images/slider1.png" onclick="currentDiv(1)"></div>
        <div><img src="images/slider-images/slider1.png" onclick="currentDiv(1)"></div>
    </div>
    <div class="articles">
        <div class="article-entry">
            <div>
                <h2>
                    <i class="fa fa-cog">
                    </i>
                        CHECKOUT MY LATEST PORTFOLIO ITEMS
                </h2>
            </div>
            <div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Duis vel dolor nisl. Vestibulum lacinia tempor justo, ut condimentum
                 justo consectetur nec. Aenean interdum ante ipsum, vitae rhoncus justo
                  faucibus a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc at ipsum sit amet felis congue pharetra fringilla at turpis. Integer
                  sed nunc purus. Proin vitae interdum tortor. Vivamus rhoncus tincidunt risus sit amet sollicitudin.
                  </p>
                  <a href="#" class="button">MORE</a>
            </div>
        </div>
        <div class="article-entry">
            <h2>
                <i class="fa fa-check">
                </i>
                    CHECKOUT MY LATEST PORTFOLIO ITEMS
            </h2>
            <div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Duis vel dolor nisl. Vestibulum lacinia tempor justo, ut condimentum
                 justo consectetur nec. Aenean interdum ante ipsum, vitae rhoncus justo
                  faucibus a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc at ipsum sit amet felis congue pharetra fringilla at turpis. Integer
                  sed nunc purus. Proin vitae interdum tortor. Vivamus rhoncus tincidunt risus sit amet sollicitudin.
                  </p>
                  <a href="#" class="button">MORE</a>
            </div>
        </div>
        <div  class="article-entry">
            <h2>
                <i class="fa fa-user">
                </i>
                    CHECKOUT MY LATEST PORTFOLIO ITEMS
            </h2>
            <div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Duis vel dolor nisl. Vestibulum lacinia tempor justo, ut condimentum
                 justo consectetur nec. Aenean interdum ante ipsum, vitae rhoncus justo
                  faucibus a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc at ipsum sit amet felis congue pharetra fringilla at turpis. Integer
                  sed nunc purus. Proin vitae interdum tortor. Vivamus rhoncus tincidunt risus sit amet sollicitudin.
                  </p>
                  <a href="#" class="button">MORE</a>
            </div>
        </div>
    </div>
    <div  class="product-list"><h4>PRODUCT LIST</h4></div>
    <div class="products">
        @if (count($products) > 0)
            @foreach($products as $product)
            <div class="product-entry">
                <div>
                    <img src="{{ $product->image }}">
                </div>
                <div>{{ $product->name }}</div>
                <div class="p-price">{{ $product->price }}</div>
            </div>
            @endforeach
        @endif
    </div>
    <div class="footer-left">
    </div>
    <div class="footer">
        <div>
            <h2>ABOUT JETRO</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Duis vel dolor nisl. Vestibulum lacinia tempor justo, ut condimentum
                 justo consectetur nec. Aenean interdum ante ipsum, vitae rhoncus justo
                  faucibus a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc at ipsum sit amet felis congue pharetra fringilla at turpis. Integer
                  sed nunc purus. Proin vitae interdum tortor. Vivamus rhoncus tincidunt risus sit amet sollicitudin.
            </p>
        </div>
        <div>
            <h2>TWITTER WIDGET</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Duis vel dolor nisl. Vestibulum lacinia tempor justo, ut condimentum
                 justo consectetur nec. Aenean interdum ante ipsum, vitae rhoncus justo
                  faucibus a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc at ipsum sit amet felis congue pharetra fringilla at turpis. Integer
                  sed nunc purus. Proin vitae interdum tortor. Vivamus rhoncus tincidunt risus sit amet sollicitudin.
            </p>
        </div>
        <div>
            <h2>CONTACT US</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Duis vel dolor nisl. Vestibulum lacinia tempor justo, ut condimentum
                 justo consectetur nec. Aenean interdum ante ipsum, vitae rhoncus justo
                  faucibus a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc at ipsum sit amet felis congue pharetra fringilla at turpis. Integer
                  sed nunc purus. Proin vitae interdum tortor. Vivamus rhoncus tincidunt risus sit amet sollicitudin.
            </p>
        </div>
    </div>
    <div class="footer-right">
    </div>
</div>
</body>
</html>
<script>
    function currentDiv(){

    }
</script>
