<!DOCTYPE html>
<html lang="en">
<head>
  <title>مكتبة النخبة-Elite Library</title>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  *{
    font-family: 'Cairo', sans-serif;
  }
  .collapse{
    font-family: 'Cairo', sans-serif;
  }
  .boo{
    
    margin: 50px;
  }


  /* ستايل الفوتر */
footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}

.contact {
  margin: 0 auto;
  max-width: 300px;
}

.contact h2 {
  font-size: 1.5rem;
}

.contact p {
  font-size: 1rem;
  margin: 10px 0;
}

/* أسلوب الروابط */
a {
  color: #fff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
.offcanvas-body {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .offcanvas-body a {
    display: block;
    color: black;
    text-decoration: none;
    margin: 
  }

</style>


<body dir="rtl">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
   <img src="imag/66.png" width="90px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)"> الصفحة الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#demo">قسم التخصصات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#connct">تواصل معنا</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="البحث">
        <button class="btn btn-warning" type="button">البحث</button>
      </form>
    </div>
  </div>
</nav>
<div>
<div class="offcanvas offcanvas-start" id="dem">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">بحوث التخصصات الجامعية</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body texte texte-black">
   <a href="psychology.php"> علم النفس.</a>
   <a href="Sociology.php">علم الاجتماع.</a>
   <a href="educational_Sciences.php">علوم التربية.</a>
   <a href="Social_sciences.php">علوم اجتماعية.</a>
   <a href="Human_sciences.php">علوم انسانية.</a>
   <a href="Communication_notification.php">اعلام واتصال.</a>
   <a href="rights.php">حقوق.</a>
   <a href="arabic.php">ادب عربي.</a>
  </div>
</div>

<div class="container-fluid mt-3">
  <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#dem">
   ! هنا قائمة التخصصات
  </button>
</div>








  <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="imag/3.jpg"  class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="imag/2 (1).jpg"  class="d-block w-100">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
<div class="boo">
<img src="imag/5.jpg" width="100%">
<div class="container mt-3">
  <button type="button" class="btn btn-warning" data-bs-toggle="collapse" data-bs-target="#demo">نبذة عنا </button>
  <div id="demo" class="collapse">
  مكتبة النخبة هي مكتبة رائدة تقدم خدمات متميزة للقراء والباحثين. تتضمن خدماتها مجموعة واسعة من الخدمات في مختلف التخصصات. 
توفر المكتبة إمكانية الوصول إلى كتب إلكترونية، ومقالات محكمة، وأبحاث أكاديمية، مما يدعم البحث والتعلم. 
باختصار، تعتبر مكتبة النخبة مصدرًا قيمًا للمعرفة والموارد للأفراد الباحثين عن المعلومات في مختلف المجالات.

  </div>
</div>
<img src="imag/77.jpg" width="100%">
</div>



<footer id="connct">
    <div class="contact">
    <p class="text-warning">تواصل معنا</p>
      
      <a href=""><img src="imag/facebook.png" width="20px"></a>
      <a href=""><img src="imag/linkedin.png" width="20px"></a>
      <a href=""><img src="imag/twitter.png" width="20px"></a>
      <a href=""><img src="imag/facebook.png" width="20px"></a>

    </div>
  </footer>
</body>

</html>