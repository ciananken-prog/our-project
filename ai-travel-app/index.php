<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Plan Your Perfect Trip with AI</h1>
                <p>Get personalized itineraries, budget plans, and discover hidden gems instantly.</p>
                <div class="hero-buttons">
                    <button class="btn btn-primary" onclick="openModal('tripModal')">Start Planning</button>
                    <button class="btn btn-secondary" onclick="window.location.href='demo.php'">View Demo</button>
                </div>
            </div>
            <div class="hero-mock">
                <div class="mock-header">
                    <div class="mock-dot red"></div>
                    <div class="mock-dot yellow"></div>
                    <div class="mock-dot green"></div>
                </div>
                <div class="mock-card">
                    <h4>Siargao, Philippines - Day 1</h4>
                    <p>Surfing Paradise of the PH</p>
                </div>
                <div class="mock-list">
                    <div class="mock-item">
                        <div class="mock-checkbox"></div>
                        <span>9:00 AM - Cloud 9 Surfing</span>
                    </div>
                    <div class="mock-item">
                        <div class="mock-checkbox"></div>
                        <span>12:00 PM - Local Cafe Lunch</span>
                    </div>
                    <div class="mock-item">
                        <div class="mock-checkbox"></div>
                        <span>3:00 PM - General Luna Beach</span>
                    </div>
                </div>
                <div class="mock-card" style="margin-top: 16px;">
                    <h4>Budget: Php 10,000</h4>
                    <p>Under budget by Php 5,000!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Powerful Features</h2>
            <p class="section-subtitle">Everything you need to plan your perfect trip</p>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🤖</div>
                    <h3>AI Itinerary Generator</h3>
                    <p>Get personalized travel plans tailored to your preferences and travel style in seconds.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Budget-Based Recommendations</h3>
                    <p>Enter your budget and receive smart recommendations that maximize value without overspending.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💎</div>
                    <h3>Hidden Gems & Tourist Traps</h3>
                    <p>Discover off-the-beaten-path locations and avoid overcrowded tourist spots.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✅</div>
                    <h3>Smart Travel Checklist</h3>
                    <p>Never forget essentials with AI-generated packing lists based on your destination.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works" id="how-it-works">
        <div class="container">
            <h2 class="section-title">How It Works</h2>
            <p class="section-subtitle">Plan your trip in three simple steps</p>
            <div class="steps">
                <div class="step">
                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition" style="background: var(--white);">
                        <div class="step-icon">🧭</div>
                        <h3>Tell Us About Your Trip</h3>
                        <p>Destination, dates, budget, style</p>
                    </div>
                </div>
                <div class="step">
                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition" style="background: var(--white);">
                        <div class="step-icon">🤖</div>
                        <h3>Get Your AI-Powered Itinerary</h3>
                        <p>Smart plans, hidden gems, budget breakdown</p>
                    </div>
                </div>
                <div class="step">
                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition" style="background: var(--white);">
                        <div class="step-icon">📋</div>
                        <h3>Explore & Customize Your Trip</h3>
                        <p>Edit plans, track checklist, finalize trip</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Preview -->
    <section class="preview" id="preview">
        <div class="container">
            <h2 class="section-title">Your Travel Dashboard</h2>
            <p class="section-subtitle">Everything organized in one place</p>
            <div class="dashboard">
                <div class="dashboard-header">
                    <div class="mock-dot red"></div>
                    <div class="mock-dot yellow"></div>
                    <div class="mock-dot green"></div>
                </div>
                <div class="dashboard-content">
                    <div class="dashboard-left">
                        <div class="day-card">
                            <h4>Day 1 - Arrival & Exploration</h4>
                            <div class="day-item">
                                <span class="day-time">9:00 AM</span>
                                <span>Arrive at Sayak Airport</span>
                            </div>
                            <div class="day-item">
                                <span class="day-time">11:00 AM</span>
                                <span>Check-in at Hotel</span>
                            </div>
                            <div class="day-item">
                                <span class="day-time">2:00 PM</span>
                                <span>Cloud 9 Surfing</span>
                            </div>
                            <div class="day-item">
                                <span class="day-time">6:00 PM</span>
                                <span>General Luna Beach Sunset</span>
                            </div>
                        </div>
                        <div class="day-card">
                            <h4>Day 2 - Island Adventure</h4>
                            <div class="day-item">
                                <span class="day-time">9:00 AM</span>
                                <span>Island Hopping Tour</span>
                            </div>
                            <div class="day-item">
                                <span class="day-time">1:00 PM</span>
                                <span>Seafood Lunch at Daku Island</span>
                            </div>
                            <div class="day-item">
                                <span class="day-time">3:00 PM</span>
                                <span>Sugba Lagoon Adventure</span>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-right">
                        <div class="budget-card">
                            <h4>Budget Breakdown</h4>
                            <div class="budget-item">
                                <span>Accommodation</span>
                                <span>Php 4,500</span>
                            </div>
                            <div class="budget-item">
                                <span>Food & Dining</span>
                                <span>Php 2,000</span>
                            </div>
                            <div class="budget-item">
                                <span>Activities</span>
                                <span>Php 2,000</span>
                            </div>
                            <div class="budget-item">
                                <span>Transport</span>
                                <span>Php 1,500</span>
                            </div>
                            <div class="budget-item">
                                <span>Total</span>
                                <span>Php 10,000</span>
                            </div>
                        </div>
                        <div class="checklist-card">
                            <h4>Packing Checklist</h4>
                            <div class="checklist-item">
                                <div class="checkbox"></div>
                                <span>Valid ID</span>
                            </div>
                            <div class="checklist-item">
                                <div class="checkbox"></div>
                                <span>Sunscreen</span>
                            </div>
                            <div class="checklist-item">
                                <div class="checkbox"></div>
                                <span>Surfboard rental</span>
                            </div>
                            <div class="checklist-item">
                                <div class="checkbox"></div>
                                <span>GoPro/waterproof camera</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section class="value-prop">
        <div class="container">
            <h2 class="section-title">Why Choose AI Travel Planner?</h2>
            <p class="section-subtitle">Benefits that make your travel planning effortless</p>
            <div class="value-grid">
                <div class="value-item">
                    <div class="value-icon">⏱️</div>
                    <h3>Save Time</h3>
                    <p>Skip hours of research. Get complete itineraries in seconds, not days.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">🚫</div>
                    <h3>Avoid Crowds</h3>
                    <p>Discover hidden gems and escape the tourist traps.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">✨</div>
                    <h3>Unique Spots</h3>
                    <p>Find destinations and experiences most tourists miss.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">💵</div>
                    <h3>Stay on Budget</h3>
                    <p>Smart recommendations that help you get the most value.</p>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
