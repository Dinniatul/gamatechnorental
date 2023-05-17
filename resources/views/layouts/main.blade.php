<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamatechno Car Rental </title>
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/style.css') !!}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body>
    <div>
        @include('layouts.navbar')
        <div>
            @yield('container')
        </div>
        @include('layouts.footer')

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!-- <script>
window.interdeal = {
    "sitekey": "7b11fa1daae81c451437a54f25234d8c",
    "Position": "Left",
    "Menulang": "EN",
    "domains": {
        "js": "https://cdn.equalweb.com/",
        "acc": "https://access.equalweb.com/"
    },
    "btnStyle": {
        "vPosition": [
            "80%",
            null
        ],
        "scale": [
            "0.8",
            "0.8"
        ],
        "icon": {
            "type": 7,
            "shape": "semicircle",
            "outline": false
        }
    }
};
(function(doc, head, body){
	var coreCall             = doc.createElement('script');
	coreCall.src             = interdeal.domains.js + 'core/4.4.4/accessibility.js';
	coreCall.defer           = true;
	coreCall.integrity       = 'sha512-+/CcYoLYMZFnEByREiBMgdPTF7ukBEy0esZKzJ7cLDP57GI4zheLrBU79NU7iy5xihB2d+DzO0XU60+Vch1iOA==';
	coreCall.crossOrigin     = 'anonymous';
	coreCall.setAttribute('data-cfasync', true );
	body? body.appendChild(coreCall) : head.appendChild(coreCall);
})(document, document.head, document.body);
</script> -->

<!-- Accessibility Code for "laravel.gt.web.id" -->
<script>
window.interdeal = {
    "sitekey": "7e089fe41451de38fa2850928f1689e9",
    "Position": "Left",
    "Menulang": "EN",
    "domains": {
        "js": "https://cdn.equalweb.com/",
        "acc": "https://access.equalweb.com/"
    },
    "btnStyle": {
        "vPosition": [
            "80%",
            null
        ],
        "scale": [
            "0.8",
            "0.8"
        ],
        "icon": {
            "type": 7,
            "shape": "semicircle",
            "outline": false
        }
    }
};
(function(doc, head, body){
	var coreCall             = doc.createElement('script');
	coreCall.src             = interdeal.domains.js + 'core/4.4.4/accessibility.js';
	coreCall.defer           = true;
	coreCall.integrity       = 'sha512-+/CcYoLYMZFnEByREiBMgdPTF7ukBEy0esZKzJ7cLDP57GI4zheLrBU79NU7iy5xihB2d+DzO0XU60+Vch1iOA==';
	coreCall.crossOrigin     = 'anonymous';
	coreCall.setAttribute('data-cfasync', true );
	body? body.appendChild(coreCall) : head.appendChild(coreCall);
})(document, document.head, document.body);
</script>

</body>
</html>