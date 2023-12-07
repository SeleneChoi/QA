<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css\style.css" rel="stylesheet">
</head>

<body>


    <?php include'partial/header.php'?>


    <main>
        <div class="mx-auto w-full max-w-full">
            <div class = "purple1 grid grid-cols-2 lg:grid-cols-12 justify-center items-center w-full gap-8 py-10 lg:py-20  px-5">
                <div class = "col-span-full lg:col-start-2 lg:col-span-5">
                
                    <h1 class = " lg:pb-10 pb-4">
                        <span class = "text-xl lg:text-5xl beige">Take a </span> 
                        <span class="text-xl lg:text-5xl orange">Media Block :D</span>
                    </h1>

                    <div>
                        <p class = "text-sm lg:text-lg leading-8">Join our event, where New Media students connect, network, and shape their future alongside alumni and industry experts!</p>

                        <div class = "pt-5 text-sm lg:text-lg">
                            <i>BCIT Downtown Campus</i>
                            <br>
                            <i>February 20,2024</i>
                            <br>
                            <button class = "button-main mt-7 w-4/4  ">Join Event</button>
                        </div>
                    </div>
                </div>
                

                <div class="col-span-full lg:col-start-7 lg:col-span-5">
                    <img src="images/homepgimg1.png" class="w-4/4" alt="">
                </div>
            </div>


            <div class="purple2 grid grid-cols-2 lg:grid-cols-12 justify-center items-center w-full gap-8 py-10 lg:py-14  px-5">
                <div class="col-span-full lg:col-start-2 lg:col-span-5">
                    <img src="images/homepgimg2.png" alt="">
                </div>

                <div class="col-span-full lg:col-start-7 lg:col-span-5">
                    <h2 class = "text-lg lg:text-2xl orange mb-5 lg:mb-5">Vision</h2>
                    <p class = "text-sm lg:text-lg leading-8 font-light">What would life after New Media look like? Where could I, a student of New Media, be after I graduate? Imagine students being able to meet their “future-selves” by bringing former alumni’s of New Media together. The event would bridge the gap between current students and industry experts who once were in their shoes. To connect, network, and build the New Media community beyond the downtown campus.</p>
                </div>
            </div>


            <div class="purple1 grid grid-cols-2 lg:grid-cols-12 justify-center items-center w-full gap-8 py-10 lg:py-14  px-5">
                <div class="col-span-full lg:col-start-2 lg:col-span-5">
                    <h2 class = "text-lg lg:text-2xl orange mb-5 lg:mb-5">Mission</h2>
                    <p class = "text-sm lg:text-lg leading-8 font-light">Since the end of the pandemic, the scarcity of opportunities is increasingly disheartening for current New Media students. Juggling the program full-time courses, endless portfolio preparation, the pursuit of opportunities beyond their academic commitments has proven to be overwhelming. We hope to bring the opportunities to the students in hopes to give support, confidence, and excitement in their career journeys.</p>
                </div>

                <div class="col-span-full lg:col-start-7 lg:col-span-5">
                    <img src="images/homepgimg3.png" alt="">
                </div>
                
            </div>
                    
        </div>

    </main>

    <?php include'partial/footer.php'?>


</body>
</html>