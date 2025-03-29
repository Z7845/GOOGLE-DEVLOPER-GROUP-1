<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kisan Kalyan</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <nav>
            <ul>
                <li><a href="#cold-storage">Cold Storage</a></li>
                <li><a href="#tractor-rental">Tractor Rental</a></li>
                <li><a href="#pesticide">Buy Pesticides</a></li>
                <li><a href="#weather">Weather Forecast</a></li>
                <li><a href="#pest-alerts">Pest Alerts</a></li>
                <li><a href="#farming-techniques">Farming Techniques</a></li>
                <li><a href="#chatbot">Chatbot</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to Kisan Kalyan</h1>
        <p>Your go-to place for everything farmers need: from cold storage, tractor rentals, pesticides, weather updates, and more!</p>
    </section>

    <!-- Cold Storage Section -->
    <section id="cold-storage">
        <h2>Cold Storage Near You</h2>
        <p>Find cold storage facilities near you to preserve your crops.</p>
        <div id="cold-storage-map">
            <!-- Embed a Google Map or use your own service here -->
            <button><a href="coldstorage.html"><p>Click Here</p></a></button>
        </div>
    </section>

    <!-- Tractor Rental Section -->
    <section id="tractor-rental">
        <h2>Rent a Tractor</h2>
        <p>Select and rent tractors based on your needs.</p>
        <form action="#">
            <label for="tractor-type">Choose Tractor Type:</label>
            <select id="tractor-type">
                <option value="small">Select Tactor type</option>
                <option value="small">Small Tractor</option>
                <option value="medium">Medium Tractor</option>
                <option value="large">Large Tractor</option>
            </select>
            <br>
            <label for="rental-duration">Rental Duration:</label>
            <input type="number" id="rental-duration" min="1" placeholder="Days">
            <br>
            <button type="submit">Book Tractor</button>
        </form>
    </section>

    <!-- Buy Pesticides Section -->
    <section id="pesticide">
        <h2>Buy Pesticides</h2>
        <p>Explore pesticides for your crops:</p>
        <div>
            <h3>Product List</h3>
            <ul>
                <a href="https://www.amazon.in/s?k=Insecticide+A&crid=WSICUXF2U89I&sprefix=insecticide+a%2Caps%2C216&ref=nb_sb_noss_2"><li>Insecticide A</li></a>
                <a href="https://www.amazon.in/s?k=Fungicide+B&crid=1ID039SDTKUA1&sprefix=fungicide+b%2Caps%2C197&ref=nb_sb_noss_2"><li>Fungicide B</li></a>
                <a href="https://www.amazon.in/s?k=Herbicide+C&crid=3AKO2G0SK9GGI&sprefix=herbicide+c%2Caps%2C195&ref=nb_sb_noss_2"><li>Herbicide C</li></a>
                <li>And many more:Click on below button</li>
            </ul>
            <a href="https://www.amazon.in/?&tag=googhydrabk1-21&ref=pd_sl_5szpgfto9i_e&adgrpid=155259813593&hvpone=&hvptwo=&hvadid=674893540034&hvpos=&hvnetw=g&hvrand=7633956169893688526&hvqmt=e&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9209673&hvtargid=kwd-64107830&hydadcr=14452_2316413&gad_source=1"><button>Many more(Anything)</button></a>
        </div>
    </section>

    <!-- Weather Forecast Section -->
    <section id="weather">
        <h2>Weather Forecast</h2>
        <p>Stay updated with real-time weather forecasts in your area.</p>
        <div id="weather-info">
            <!-- Real-time weather data will be fetched using an API -->
            <button><a href="weather.html"><p>For Weather click here</p></a></button>
        </div>
    </section>

    <!-- Pest Alerts Section -->
    <section id="pest-alerts">
        <h2>Pest Alerts</h2>
        <h2>Task Reminder</h2>
        <div>
            <input type="text" id="task" placeholder="Enter your task">
            <input type="datetime-local" id="time">
            <button onclick="setReminder()">Set Alert</button>
        </div>
    
        <audio id="alarmSound" src="https://actions.google.com/sounds/v1/alarms/alarm_clock.ogg" preload="auto"></audio>
    
        <script>
            function setReminder() {
                const taskInput = document.getElementById('task').value;
                const timeInput = document.getElementById('time').value;
                const alarmSound = document.getElementById('alarmSound');
    
                if (!taskInput || !timeInput) {
                    alert('Please enter both task details and time.');
                    return;
                }
    
                const taskTime = new Date(timeInput).getTime();
                const currentTime = new Date().getTime();
                const timeDifference = taskTime - currentTime;
    
                if (timeDifference <= 0) {
                    alert('Please enter a future time.');
                    return;
                }
    
                setTimeout(() => {
                    alarmSound.play();
                    alert(`It's time to start: ${taskInput}`);
                }, timeDifference);
            }
        </script>
    </section>

    <!-- Scientific Farming Techniques Section -->
    <section id="farming-techniques">
        <h2>Scientific Farming Techniques</h2>
        <p>Learn about the latest farming techniques and best practices.</p>
        <ul>
            <li>Crop Rotation
                is an agricultural practice that involves planting different types of crops in the same area across different seasons or years. This method provides numerous advantages such as improved soil fertility by alternating nitrogen-fixing crops like legumes with nutrient-demanding crops like cereals. It helps in controlling pests and diseases by disrupting the life cycles of crop-specific pests and pathogens, thereby reducing the need for chemical pesticides. Crop rotation also enhances soil structure and prevents soil erosion by maintaining a continuous ground cover. Additionally, it can improve weed management as different crops have different competitive abilities against weeds. However, there are some disadvantages to crop rotation. It requires careful planning and knowledge of crop requirements and soil conditions, which can be time-consuming and complex. The initial transition to crop rotation can be challenging for farmers used to monoculture practices, and there might be fluctuations in yields if not managed properly. Furthermore, crop rotation may require additional labor and investment in diverse crop seeds and inputs. Despite these challenges, the long-term benefits of crop rotation, such as enhanced soil health, increased biodiversity, and reduced environmental impact, make it a valuable practice in sustainable agriculture.
                Certainly! Here are the advantages and disadvantages of crop rotation, presented point-wise:
                <br>
                <br>
                 Advantages:
                <br>
                <br>
                1. Improved Soil Fertility:
                - Alternating nitrogen-fixing crops like legumes with nutrient-demanding crops like cereals helps maintain soil nutrient levels.
                <br>
                <br>
                2. Pest and Disease Management:
                - Rotating crops disrupts the life cycles of crop-specific pests and pathogens, reducing their populations and minimizing the need for chemical pesticides.
                <br>
                <br>
                3. Enhanced Soil Structure:
                - Different crops have varying root structures, which help improve soil structure and prevent soil erosion.
                <br>
                <br>
                4. Weed Control:
                - Growing different crops with varying competitive abilities against weeds can help reduce weed populations.
                <br>
                <br>
                5. Increased Biodiversity:
                - Crop rotation promotes biodiversity, which can enhance ecosystem resilience and soil health.
                <br>
                <br>
                 Disadvantages:
                
                <br>
                <br>
                 1. Complex Planning and Management:
                - Requires careful planning and knowledge of crop requirements and soil conditions, which can be time-consuming and complex.
                <br>
                <br>
                2. Initial Transition Challenges:
                - Farmers accustomed to monoculture practices may face challenges in transitioning to crop rotation, including changes in equipment and farming techniques.
                <br>
                <br>
                3. Yield Fluctuations:
                - Improper management of crop rotation can lead to short-term reductions in crop yields.
                <br>
                <br>
                4. Labor and Cost:
                - Implementing crop rotation may require additional labor and investment in diverse crop seeds and inputs.
                <br>
                <br>
                5. Market Demand:
                - Farmers need to consider market demand for the rotated crops to ensure economic viability.
            </li>
            <li>Soil Health Management
                refers to practices and strategies aimed at maintaining or improving the overall health and fertility of the soil. Healthy soil is critical for sustainable agriculture as it supports plant growth, enhances water infiltration and storage, and fosters a diverse ecosystem of beneficial microorganisms. Here are the key points, advantages, and disadvantages of soil health management:
                <br>
                <br>
                Advantages:
                <br>
                <br>
                1.Enhanced Soil Fertility:
                Practices like crop rotation and organic amendments replenish soil nutrients and improve soil structure.
                <br>
                <br>
                2.Improved Water Retention:
                Healthy soil has better water infiltration and storage capacity, reducing the risk of drought and erosion.
                <br>
                <br>
                3.Pest and Disease Control:

                Integrated pest management and crop rotation reduce the reliance on chemical pesticides.
                <br>
                <br>
                4.Increased Biodiversity:

                Diverse cropping systems and reduced chemical inputs foster a rich ecosystem of soil organisms.
                <br>
                <br>
                Sustainable Farming:

                Soil health management practices promote long-term sustainability and resilience of farming systems.
                <br>
                <br>
                Disadvantages:
                <br>
                <br>

                1. Labor-Intensive:
                - Implementing soil health management practices can be labor-intensive and require additional time and effort.
                <br>
                <br>
                2. Initial Costs:
                - Transitioning to sustainable practices may involve initial costs for new equipment, organic inputs, and soil testing.
                <br>
                <br>
                3. Knowledge and Skills:
                - Successful soil health management requires knowledge of soil science, crop requirements, and sustainable practices, which can be complex.
                <br>
                <br>
                4. Short-Term Yield Reductions:
                - Some practices, like reduced tillage, may lead to short-term yield reductions until the soil health improves.
                <br>
                <br>
                5. Market Limitations:
                - Farmers need to consider market demand for crops grown using sustainable practices to ensure economic viability.

            </li>
        </ul>
    </section>

    <!-- Chatbot Section -->
    <section id="chatbot">
        <h2>Chat with Us</h2>
        <div id="chatbot-box">
            <p>Ask me anything about farming!</p>
            <input type="text" id="chat-input" placeholder="Type your question...">
            <button onclick="startChat()">Send</button>
            <div id="chat-response"></div>
        </div>
    </section>

    <footer>
        <p>Farmers' Support Website &copy; 2025</p>
    </footer>

    <!-- JavaScript -->
    <script>
        function sendAlert() {
            alert('Pest Alert: It is time to apply insecticide based on weather and pest data!');
        }

        function startChat() {
            const userQuestion = document.getElementById('chat-input').value;
            const responseDiv = document.getElementById('chat-response');
            if (userQuestion) {
                //responseDiv.innerHTML = You asked: "${userQuestion}"<br>Chatbot response: "That’s a great question! Please consult a local expert for specific advice.";
            } else {
                responseDiv.innerHTML = "Please type a question.";
            }
        }
    </script>
</body>
</html>