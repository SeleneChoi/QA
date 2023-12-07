<footer>
        <div class="purple1 grid grid-cols-2 lg:grid-cols-12 gap-6 px-5 lg:px-7">
            <div class="col-span-full lg:col-start-5 lg:col-span-4 my-10">
                <h2 class="poppins second text-lg lg:text-2xl font-bold lg:font-semibold text-center mb-5">Join Event
                </h2>
                <p class="text-sm lg:text-lg font-light">Register now for a future of connections and success in New
                    Media!</p>
                <form class="flex flex-col my-4" method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <label class="text-sm lg:text-lg" for="email">Email:</label>
                    <input
                        class="purple1 text-sm lg:text-lg font-light italic border-solid border-white border rounded text-center p-1 mb-2"
                        type="email" name="email" placeholder="Your Email" required>
                    <label class="text-sm lg:text-lg" for="linkedin">Your LinkedIn URL (optional):</label>
                    <input
                        class="purple1 text-sm lg:text-lg font-light italic border-solid border-white border rounded text-center p-1"
                        type="text" name="linkedin" placeholder="Your LinkedIn url (optional)">
                    <input class="text-sm lg:text-lg bg-orange-700 rounded mt-8 mb-4 py-2 " type="submit" value="Register">
                    <?php
                    // Database connection parameters
                    $servername = "localhost";
                    $username = "root";
                    $password = "root";
                    $dbname = "registerdatabase";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Check if form is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Retrieve form data
                        $email = $_POST["email"];
                        $linkedin = $_POST["linkedin"];

                        // Insert data into the database
                        $sql = "INSERT INTO registertable (email, linkedin) VALUES ('$email', '$linkedin')";

                        if ($conn->query($sql) === TRUE) {
                            echo '<div class="fist poppins col-span-full text-center font-bold italic text-xl underline underline-offset-8 decoration-orange-600">Registration successful!</div>';
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        // Close the database connection
                        $conn->close();
                    }
                    ?>

                </form>
                <div class="second text-center my-8">
                    <h3 class="poppins">Let's Connect!</h3>
                    <div class=" flex justify-center gap-6 mt-3">
                        <a href=""><i class="text-3xl fa-brands fa-linkedin"></i></a>
                        <a href=""><i class="text-3xl fa-brands fa-discord"></i></a>
                        <a href=""><i class="text-3xl fa-solid fa-envelope"></i></a>
                    </div>
                </div>
                <p class="text-sm lg:text-lg font-light text-center">Copyright &copy; Event 2023</p>
                <a id="arrow_top" class="second fixed bottom-5 right-5" href="#top"><i
                        class="text-5xl fa-solid fa-circle-arrow-up"></i></a>

            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
