<style>

.body {
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}
.container {
    margin-bottom: 40px;
}

.top h2 {
    text-align: center;
}
.top h4 {
    margin:40px 40px 40px 0px;
}
.card {
    padding: 20px;
    border-radius: 20px;
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25);
}

.card:hover {
    box-shadow: 12px 12px 12px rgba(0, 0, 0, 0.25);
}
.card-body {
text-align: center;
margin: auto;
justify-content: center;
align-items: center;
}

.btn-start {
    margin: auto;
    margin-top: 20px;
    padding: 10px 30px 10px 30px;

}

a {
    text-decoration: none;
}

.card-title {
    color: black;
    text-align: center;
}

.animated {
        animation-duration: 5s;
        animation-fill-mode: repeat;
}

@keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fadeInDown {
            animation-name: fadeInDown;
        }

@keyframes bounceInDown {
        0% {
        opacity: 0;
        transform: translateY(-120px);
        }
        60% {
        opacity: 1;
        transform: translateY(20px);
        }
        80% {
        transform: translateY(-10px);
        }
        100% {
        transform: translateY(0);
    } 
}
            
.bounceInDown {
        animation-name: bounceInDown;
    }

</style>