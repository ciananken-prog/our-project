<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siargao 3-Day Adventure - AI Travel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #FFF8EC;
            color: #2D3A28;
        }

        header {
            background: linear-gradient(135deg, #546B41 0%, #435934 100%);
            padding: 20px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 20px rgba(84, 107, 65, 0.3);
        }

        .logo {
            color: #FFF8EC;
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
        }

        .logo span {
            color: #99AD7A;
        }

        .back-btn {
            background-color: #99AD7A;
            color: #2D3A28;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background-color: #DCCCAC;
            transform: translateY(-2px);
        }

        .hero {
            background: linear-gradient(135deg, #546B41 0%, #435934 100%);
            color: #FFF8EC;
            padding: 80px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(153, 173, 122, 0.1) 0%, transparent 50%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .hero p {
            font-size: 20px;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .section {
            background: white;
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(84, 107, 65, 0.1);
            border-left: 5px solid #546B41;
        }

        .section h2 {
            color: #546B41;
            font-size: 28px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .itinerary-day {
            background: linear-gradient(135deg, #FFF8EC 0%, #f5f0e0 100%);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 15px;
            border: 2px solid #DCCCAC;
            transition: all 0.3s ease;
        }

        .itinerary-day:hover {
            border-color: #99AD7A;
            transform: translateX(5px);
        }

        .itinerary-day h3 {
            color: #435934;
            font-size: 20px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .itinerary-day p {
            color: #2D3A28;
            line-height: 1.6;
        }

        .day-tag {
            background: #546B41;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .budget-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .budget-table th {
            background: #546B41;
            color: white;
            padding: 15px;
            text-align: left;
        }

        .budget-table td {
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .budget-table tr:hover {
            background-color: #FFF8EC;
        }

        .budget-total {
            background: linear-gradient(135deg, #546B41 0%, #435934 100%);
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        .hidden-gems {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }

        .gem-item {
            background: linear-gradient(135deg, #99AD7A 0%, #7a8f5c 100%);
            color: white;
            padding: 15px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .gem-item::before {
            content: '★';
            font-size: 20px;
        }

        .avoid-item {
            background: linear-gradient(135deg, #DCCCAC 0%, #c4b39a 100%);
            color: #2D3A28;
            padding: 15px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .avoid-item::before {
            content: '⚠';
            font-size: 18px;
        }

        .checklist {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
            margin-top: 15px;
        }

        .checklist-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px;
            background: #FFF8EC;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .checklist-item:hover {
            background: #e8e0d0;
        }

        .checklist-item input[type="checkbox"] {
            width: 20px;
            height: 20px;
            accent-color: #546B41;
            cursor: pointer;
        }

        .cta-section {
            text-align: center;
            padding: 60px 40px;
            background: linear-gradient(135deg, #546B41 0%, #435934 100%);
            border-radius: 16px;
            margin-top: 40px;
        }

        .cta-section h2 {
            color: #FFF8EC;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .cta-section p {
            color: #DCCCAC;
            font-size: 18px;
            margin-bottom: 30px;
        }

        .cta-btn {
            background: #DCCCAC;
            color: #2D3A28;
            padding: 18px 40px;
            border: none;
            border-radius: 50px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(220, 204, 172, 0.4);
        }

        .cta-btn:hover {
            background: #FFF8EC;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(220, 204, 172, 0.6);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(45, 58, 40, 0.8);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: white;
            margin: 5% auto;
            padding: 40px;
            border-radius: 20px;
            width: 90%;
            max-width: 600px;
            position: relative;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .close {
            color: #546B41;
            float: right;
            font-size: 32px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .close:hover {
            color: #DCCCAC;
            transform: rotate(90deg);
        }

        .modal h2 {
            color: #546B41;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #2D3A28;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 16px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 14px;
            border: 2px solid #DCCCAC;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #FFF8EC;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #546B41;
            box-shadow: 0 0 10px rgba(84, 107, 65, 0.2);
        }

        .submit-btn {
            width: 100%;
            background: linear-gradient(135deg, #546B41 0%, #435934 100%);
            color: white;
            padding: 16px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(84, 107, 65, 0.4);
        }

        .results {
            display: none;
            margin-top: 30px;
            padding: 20px;
            background: linear-gradient(135deg, #FFF8EC 0%, #f5f0e0 100%);
            border-radius: 12px;
            border: 2px solid #99AD7A;
        }

        .results h3 {
            color: #546B41;
            margin-bottom: 15px;
        }

        footer {
            background: #2D3A28;
            color: #FFF8EC;
            text-align: center;
            padding: 30px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">AI Travel <span>Planner</span></a>
        <button class="back-btn" onclick="window.location.href='index.php'">← Back to Home</button>
    </header>

    <div class="hero">
        <h1>🏝️ Siargao 3-Day Adventure</h1>
        <p>Experience the ultimate tropical getaway in the Surfing Capital of the Philippines</p>
    </div>

    <div class="container">
        <div class="section">
            <h2>📅 3-Day Itinerary</h2>
            
            <div class="itinerary-day">
                <h3><span class="day-tag">Day 1</span> Cloud 9 Surfing & Pacifico Beach</h3>
                <p>Start your adventure at the famous Cloud 9 surf break - a world-renowned right-hand reef break. Spend the morning catching waves with local instructors available for beginners. Enjoy lunch at a beachfront restaurant serving fresh seafood. In the afternoon, relax at Pacifico Beach or explore the nearby coconut plantations. End the day watching the sunset at Cloud 9 sunset view deck.</p>
            </div>

            <div class="itinerary-day">
                <h3><span class="day-tag">Day 2</span> Island Hopping Adventure</h3>
                <p>Board a boat for an exciting island hopping tour. Visit Guyam Island - a tiny tropical paradise with coconut trees and white sand beaches. Explore Daku Island where you can enjoy a seafood lunch prepared by local fishermen. Continue to Naked Island, a sandbar perfect for swimming and snorkeling. Return to Siargao in the late afternoon and explore the local nightlife at Cloud 9 area.</p>
            </div>

            <div class="itinerary-day">
                <h3><span class="day-tag">Day 3</span> Sugba Lagoon & Magpupungko Rock Pools</h3>
                <p>Start early for a trip to Sugba Lagoon - a stunning turquoise lagoon surrounded by limestone cliffs. Go kayaking or paddleboarding in the crystal-clear waters. Have a picnic lunch on the floating bamboo platform. In the afternoon, visit Magpupungko Rock Pools during low tide - natural tidal pools perfect for swimming and photography. Return to town for a farewell dinner at one of Siargao's famous grill restaurants.</p>
            </div>
        </div>

        <div class="section">
            <h2>💰 Budget Breakdown</h2>
            <table class="budget-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Cost (Php)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>🏨 Accommodation</td>
                        <td>3 nights budget hotel/hostel</td>
                        <td>Php 3,000</td>
                    </tr>
                    <tr>
                        <td>🍚 Food & Drinks</td>
                        <td>3 days (breakfast, lunch, dinner)</td>
                        <td>Php 2,400</td>
                    </tr>
                    <tr>
                        <td>🚤 Island Hopping</td>
                        <td>Boat rental & guide</td>
                        <td>Php 1,500</td>
                    </tr>
                    <tr>
                        <td>🏄 Surfing Lessons</td>
                        <td>2-hour session with equipment</td>
                        <td>Php 800</td>
                    </tr>
                    <tr>
                        <td>🎫 Entrance Fees</td>
                        <td>Sugba Lagoon & Magpupungko</td>
                        <td>Php 600</td>
                    </tr>
                    <tr>
                        <td>🛵 Transportation</td>
                        <td>Motorbike rental (2 days)</td>
                        <td>Php 1,000</td>
                    </tr>
                    <tr>
                        <td>🐠 Miscellaneous</td>
                        <td>Snacks, drinks, tips</td>
                        <td>Php 700</td>
                    </tr>
                    <tr class="budget-total">
                        <td colspan="2">Total Budget</td>
                        <td>Php 10,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section">
            <h2>💎 Hidden Gems</h2>
            <div class="hidden-gems">
                <div class="gem-item">Tayangban Cave Pool - Secret underground swimming spot</div>
                <div class="gem-item">C贡马椰子林 - Beautiful coconut forest for photos</div>
                <div class="gem-item">Bingai Public Market - Local fresh produce & crafts</div>
                <div class="gem-item">Maasin River - Kayaking through mangroves</div>
                <div class="gem-item">Secret Beach - Secluded beach near General Luna</div>
                <div class="gem-item">Siargao Island Coffee - Best local coffee spots</div>
            </div>
        </div>

        <div class="section">
            <h2>⚠️ Things to Avoid</h2>
            <div class="avoid-item">Avoid visiting during wet season (November-February) due to rough seas</div>
            <div class="avoid-item">Don't drink tap water - stick to bottled or filtered water</div>
            <div class="avoid-item">Avoid booking accommodations far from General Luna - transportation is limited</div>
            <div class="avoid-item">Don't forget to bring reef-safe sunscreen to protect marine life</div>
            <div class="avoid-item">Avoid eating at restaurants without prices - tourist pricing is common</div>
            <div class="avoid-item">Don't rent motorcycles without proper license - police checkpoints are common</div>
        </div>

        <div class="section">
            <h2>✅ Travel Checklist</h2>
            <div class="checklist">
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Passport/ID</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Sunscreen (SPF 50+)</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Reef-safe sunscreen</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Waterproof phone case</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Beach towel</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Snorkel gear</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Waterproof bag</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Cash (Php)</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Power bank</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Motion sickness pills</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Insect repellent</span>
                </label>
                <label class="checklist-item">
                    <input type="checkbox">
                    <span>Hat & sunglasses</span>
                </label>
            </div>
        </div>

        <div class="cta-section">
            <h2>Ready for Your Own Adventure?</h2>
            <p>Let our AI create a personalized travel plan just for you!</p>
            <button class="cta-btn" onclick="openModal()">Plan Your Own Trip</button>
        </div>
    </div>

    <div id="tripModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>🌍 Plan Your Dream Trip</h2>
            <form id="tripForm" onsubmit="submitTrip(event)">
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <input type="text" id="destination" name="destination" placeholder="e.g., Siargao, Philippines" required>
                </div>
                <div class="form-group">
                    <label for="startDate">Start Date</label>
                    <input type="date" id="startDate" name="startDate" required>
                </div>
                <div class="form-group">
                    <label for="endDate">End Date</label>
                    <input type="date" id="endDate" name="endDate" required>
                </div>
                <div class="form-group">
                    <label for="budget">Budget (Php)</label>
                    <input type="number" id="budget" name="budget" placeholder="e.g., 10000" min="1000" required>
                </div>
                <div class="form-group">
                    <label for="travelStyle">Travel Style</label>
                    <select id="travelStyle" name="travelStyle" required>
                        <option value="">Select your style</option>
                        <option value="adventure">Adventure</option>
                        <option value="relaxation">Relaxation</option>
                        <option value="cultural">Cultural</option>
                        <option value="foodie">Food & Culinary</option>
                        <option value="photography">Photography</option>
                    </select>
                </div>
                <button type="submit" class="submit-btn">Generate My Trip Plan</button>
            </form>
            <div id="results" class="results">
                <h3>🎉 Your Trip Plan</h3>
                <p id="resultContent"></p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 AI Travel Planner. All rights reserved.</p>
    </footer>

    <script>
        function openModal() {
            document.getElementById('tripModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('tripModal').style.display = 'none';
            document.body.style.overflow = 'auto';
            document.getElementById('results').style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('tripModal')) {
                closeModal();
            }
        }

        function submitTrip(event) {
            event.preventDefault();
            
            const destination = document.getElementById('destination').value;
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            const budget = document.getElementById('budget').value;
            const travelStyle = document.getElementById('travelStyle').value;

            const resultContent = document.getElementById('resultContent');
            resultContent.innerHTML = `
                <strong>Destination:</strong> ${destination}<br>
                <strong>Dates:</strong> ${startDate} to ${endDate}<br>
                <strong>Budget:</strong> Php ${parseInt(budget).toLocaleString()}<br>
                <strong>Style:</strong> ${travelStyle.charAt(0).toUpperCase() + travelStyle.slice(1)}<br><br>
                <em>Your personalized itinerary is being generated! Our AI will create a detailed trip plan based on your preferences.</em>
            `;

            document.getElementById('results').style.display = 'block';
        }
    </script>
</body>
</html>