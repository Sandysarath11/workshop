<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Workshop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="certificate">
        <!-- Medal Icon -->
        <div class="medal">🏅</div>

        <!-- Header -->
        <h1 class="title">CERTIFICATE</h1>
        <p class="subtitle">Of Workshop</p>

        <!-- Main Content -->
        <p class="message">This Certificate is Proudly Presented to our Winner:</p>
        
        <!-- Winner's Name (Dynamic) -->
        <h2 class="winner-name">{{ $student->name }}</h2>

        <p class="description">
            For 1st Winning Video Content Competition By Larana, Inc <br> 
            on 21 October, 2023.
        </p>

        <!-- Signature -->
        <div class="signature">
            <div class="line"></div>
            <p class="name">Aaron Loeb</p>
            <p class="position">CEO Larana, Inc</p>
        </div>
    </div>

</body>
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

/* Certificate Container */
.certificate {
    position: relative;
    width: 700px;
    background: white;
    padding: 40px;
    text-align: center;
    border: 10px solid black;
    border-radius: 10px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
}

/* Medal Icon */
.medal {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 40px;
    background: gold;
    padding: 10px;
    border-radius: 50%;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
}

/* Title */
.title {
    font-size: 40px;
    font-weight: bold;
    text-transform: uppercase;
    color: black;
}

.subtitle {
    font-size: 20px;
    font-style: italic;
    color: gray;
}

/* Message */
.message {
    font-size: 18px;
    margin-top: 20px;
}

/* Winner Name */
.winner-name {
    font-size: 35px;
    font-weight: bold;
    color: black;
    margin: 20px 0;
}

/* Description */
.description {
    font-size: 18px;
    color: gray;
}

/* Signature Section */
.signature {
    margin-top: 40px;
    text-align: center;
}

.signature .line {
    width: 200px;
    height: 2px;
    background: black;
    margin: 10px auto;
}

.signature .name {
    font-size: 20px;
    font-weight: bold;
}

.signature .position {
    font-size: 16px;
    color: gray;
}

/* Decorative Bottom */
.certificate::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 50px;
    background: linear-gradient(to right, gold, black, gold);
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

</style>
</html>
