<!-- Error page -->
<!DOCTYPE html>
<html>

<head>
    <title>Error 404</title>
    <link type="text/css" rel="stylesheet" href="css/404.css" />
    <link rel="icon" type="image/x-icon" href="../images/tsParticles-64.png">
</head>

<body class="permission_denied">
    <div id="tsparticles"></div>
    <div class="denied__wrapper">
        <h1>404</h1>
        <h3>LOST IN <span>SPACE</span> App-Name? Hmm, looks like that page doesn't exist.</h3>
        <img id="astronaut" src="img/404Error/astronaut.svg" />
        <img id="planet" src="img/404Error/planet.svg" />
        <a href="/"><button class="denied__link">Go Home</button></a>
    </div>

    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/tsparticles@2.3.4/tsparticles.bundle.min.js"></script>
    <script type="text/javascript" src="js/404.js"></script>

	<script>
		var particles = {
    fpsLimit: 60,
    particles: {
        number: {
            value: 160,
            density: {
                enable: true,
                area: 800
            }
        },
        color: {
            value: "#ffffff"
        },
        shape: {
            type: "circle"
        },
        opacity: {
            value: 1,
            random: {
                enable: true,
                minimumValue: 0.1
            },
            animation: {
                enable: true,
                speed: 1,
                minimumValue: 0,
                sync: false
            }
        },
        size: {
            value: 3,
            random: {
                enable: true,
                minimumValue: 1
            }
        },
        move: {
            enable: true,
            speed: 0.17,
            direction: "none",
            random: true,
            straight: false,
            outModes: {
                default: "out"
            },
        }
    },
    interactivity: {
        detectsOn: "canvas",
        events: {
            resize: false
        }
    },
    detectRetina: true
};

tsParticles.load("tsparticles", particles);
	</script>

</html>