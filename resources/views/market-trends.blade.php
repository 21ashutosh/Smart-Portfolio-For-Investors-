<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Trends | Smart Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.0.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.2.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-annotation@1.0.2"></script>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --success-color: #2ecc71;
            --danger-color: #e74c3c;
            --warning-color: #f39c12;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: var(--dark-color);
        }
        
        .market-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .chart-container {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }
        
        .market-card {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }
        
        .market-card:hover {
            transform: translateY(-5px);
        }
        
        .market-card .card-title {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 0.5rem;
        }
        
        .market-card .card-value {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0;
        }
        
        .positive-change {
            color: var(--success-color);
        }
        
        .negative-change {
            color: var(--danger-color);
        }
        
        .btn-back {
            border-radius: 30px;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
        }
        
        .ticker-container {
            display: flex;
            overflow-x: auto;
            padding: 1rem 0;
            margin-bottom: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .ticker-item {
            min-width: 120px;
            padding: 0 1rem;
            text-align: center;
            border-right: 1px solid #f1f1f1;
        }
        
        .ticker-item:last-child {
            border-right: none;
        }
        
        .ticker-symbol {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .ticker-price {
            font-size: 1.1rem;
            font-weight: 700;
        }
        
        .ticker-change {
            font-size: 0.85rem;
        }
        
        .nav-tabs .nav-link {
            color: var(--dark-color);
            font-weight: 500;
            border: none;
            padding: 0.8rem 1.5rem;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            background-color: transparent;
            border-bottom: 3px solid var(--primary-color);
        }
        
        .tab-content {
            background-color: white;
            border-radius: 0 0 10px 10px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>
    <!-- Market Header -->
    <div class="market-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="mb-1"><i class="fas fa-chart-line me-2"></i>Market Trends</h1>
                    <p class="mb-0">Real-time market data and analysis</p>
                </div>
                <a href="/" class="btn btn-light btn-back">
                    <i class="fas fa-arrow-left me-2"></i>Back to Home
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Market Ticker -->
        <div class="ticker-container" id="marketTicker">
            <!-- Ticker items will be populated by JavaScript -->
        </div>

        <!-- Market Summary Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="market-card">
                    <h5 class="card-title">S&P 500</h5>
                    <p class="card-value" id="sp500-price">4,500.67</p>
                    <span class="positive-change" id="sp500-change">
                        <i class="fas fa-arrow-up me-1"></i>+1.2% (24h)
                    </span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="market-card">
                    <h5 class="card-title">NASDAQ</h5>
                    <p class="card-value" id="nasdaq-price">14,200.34</p>
                    <span class="positive-change" id="nasdaq-change">
                        <i class="fas fa-arrow-up me-1"></i>+2.1% (24h)
                    </span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="market-card">
                    <h5 class="card-title">DOW JONES</h5>
                    <p class="card-value" id="dow-price">34,500.89</p>
                    <span class="negative-change" id="dow-change">
                        <i class="fas fa-arrow-down me-1"></i>-0.3% (24h)
                    </span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="market-card">
                    <h5 class="card-title">BITCOIN</h5>
                    <p class="card-value" id="btc-price">$30,250.42</p>
                    <span class="positive-change" id="btc-change">
                        <i class="fas fa-arrow-up me-1"></i>+3.8% (24h)
                    </span>
                </div>
            </div>
        </div>

        <!-- Market Charts -->
        <ul class="nav nav-tabs" id="marketTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="stocks-tab" data-bs-toggle="tab" data-bs-target="#stocks" type="button" role="tab">Stocks</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="crypto-tab" data-bs-toggle="tab" data-bs-target="#crypto" type="button" role="tab">Cryptocurrency</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="commodities-tab" data-bs-toggle="tab" data-bs-target="#commodities" type="button" role="tab">Commodities</button>
            </li>
        </ul>
        <div class="tab-content" id="marketTabsContent">
            <div class="tab-pane fade show active" id="stocks" role="tabpanel">
                <div class="chart-container">
                    <canvas id="stocksChart" height="400"></canvas>
                </div>
            </div>
            <div class="tab-pane fade" id="crypto" role="tabpanel">
                <div class="chart-container">
                    <canvas id="cryptoChart" height="400"></canvas>
                </div>
            </div>
            <div class="tab-pane fade" id="commodities" role="tabpanel">
                <div class="chart-container">
                    <canvas id="commoditiesChart" height="400"></canvas>
                </div>
            </div>
        </div>

        <!-- Market News -->
        <div class="card market-card">
            <div class="card-body">
                <h5 class="card-title mb-3"><i class="fas fa-newspaper me-2"></i>Latest Market News</h5>
                <div class="row" id="marketNews">
                    <!-- News items will be populated by JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // API Configuration
        const API_KEY = 'T99K0DJAPIJ8NSI7';
        const BASE_URL = 'https://www.alphavantage.co/query';
        
        // Sample ticker data (in a real app, you would fetch this from your API)
        const tickerData = [
            { symbol: 'AAPL', price: 189.37, change: 1.25, changePercent: 0.66 },
            { symbol: 'MSFT', price: 328.39, change: 2.41, changePercent: 0.74 },
            { symbol: 'GOOGL', price: 134.21, change: -0.75, changePercent: -0.56 },
            { symbol: 'AMZN', price: 128.45, change: 1.32, changePercent: 1.04 },
            { symbol: 'TSLA', price: 260.54, change: 5.21, changePercent: 2.04 },
            { symbol: 'META', price: 298.61, change: -2.35, changePercent: -0.78 },
            { symbol: 'NVDA', price: 459.77, change: 12.45, changePercent: 2.78 },
            { symbol: 'BTC', price: 30250.42, change: 1102.54, changePercent: 3.78 },
            { symbol: 'ETH', price: 1850.67, change: 45.32, changePercent: 2.51 },
            { symbol: 'GOLD', price: 1945.30, change: -8.75, changePercent: -0.45 }
        ];

        // Sample news data
        const newsData = [
            {
                title: 'Fed Signals Possible Rate Pause in June Meeting',
                source: 'Financial Times',
                time: '2 hours ago',
                summary: 'The Federal Reserve indicated it may pause its aggressive rate-hiking campaign at its next meeting as inflation shows signs of cooling.'
            },
            {
                title: 'Tech Stocks Rally on AI Optimism',
                source: 'Bloomberg',
                time: '4 hours ago',
                summary: 'Major tech companies saw shares rise amid growing investor enthusiasm about artificial intelligence applications.'
            },
            {
                title: 'Bitcoin Surges Past $30,000 Amid Banking Concerns',
                source: 'CoinDesk',
                time: '6 hours ago',
                summary: 'Cryptocurrencies gained as investors sought alternatives to traditional banking systems.'
            }
        ];

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            // Load ticker data
            loadTickerData();
            
            // Load news data
            loadNewsData();
            
            // Initialize charts
            initStockChart();
            initCryptoChart();
            initCommoditiesChart();
            
            // In a real app, you would fetch actual data from your API
            // fetchMarketData();
        });

        // Load ticker data
        function loadTickerData() {
            const tickerContainer = document.getElementById('marketTicker');
            
            tickerData.forEach(item => {
                const tickerItem = document.createElement('div');
                tickerItem.className = 'ticker-item';
                
                const changeClass = item.changePercent >= 0 ? 'positive-change' : 'negative-change';
                const changeIcon = item.changePercent >= 0 ? 'fa-arrow-up' : 'fa-arrow-down';
                
                tickerItem.innerHTML = `
                    <div class="ticker-symbol">${item.symbol}</div>
                    <div class="ticker-price">$${item.price.toFixed(2)}</div>
                    <div class="ticker-change ${changeClass}">
                        <i class="fas ${changeIcon} me-1"></i>${Math.abs(item.changePercent)}%
                    </div>
                `;
                
                tickerContainer.appendChild(tickerItem);
            });
        }

        // Load news data
        function loadNewsData() {
            const newsContainer = document.getElementById('marketNews');
            
            newsData.forEach(item => {
                const newsItem = document.createElement('div');
                newsItem.className = 'col-md-4 mb-3';
                
                newsItem.innerHTML = `
                    <div class="card h-100">
                        <div class="card-body">
                            <h6 class="card-title">${item.title}</h6>
                            <p class="card-text text-muted small">${item.source} • ${item.time}</p>
                            <p class="card-text">${item.summary}</p>
                        </div>
                    </div>
                `;
                
                newsContainer.appendChild(newsItem);
            });
        }

        // Initialize stock chart
        function initStockChart() {
            const ctx = document.getElementById('stocksChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [
                        {
                            label: 'S&P 500',
                            data: [4000, 4100, 4150, 4250, 4400, 4500],
                            borderColor: '#3498db',
                            backgroundColor: 'rgba(52, 152, 219, 0.1)',
                            borderWidth: 2,
                            tension: 0.3,
                            fill: true
                        },
                        {
                            label: 'NASDAQ',
                            data: [12000, 12500, 13000, 13200, 13800, 14200],
                            borderColor: '#2ecc71',
                            backgroundColor: 'rgba(46, 204, 113, 0.1)',
                            borderWidth: 2,
                            tension: 0.3,
                            fill: true
                        },
                        {
                            label: 'DOW JONES',
                            data: [33000, 33500, 33200, 34000, 34500, 34500],
                            borderColor: '#e74c3c',
                            backgroundColor: 'rgba(231, 76, 60, 0.1)',
                            borderWidth: 2,
                            tension: 0.3,
                            fill: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Major Stock Indices (6 Month Performance)',
                            font: {
                                size: 16
                            }
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            grid: {
                                drawBorder: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        }

        // Initialize crypto chart
        function initCryptoChart() {
            const ctx = document.getElementById('cryptoChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Bitcoin', 'Ethereum', 'Cardano', 'Solana', 'Polygon'],
                    datasets: [{
                        label: 'Price (USD)',
                        data: [30250, 1850, 0.35, 21.50, 0.85],
                        backgroundColor: [
                            '#f7931a',
                            '#627eea',
                            '#0033ad',
                            '#00ffbd',
                            '#8247e5'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Cryptocurrency Prices',
                            font: {
                                size: 16
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        }

        // Initialize commodities chart
        function initCommoditiesChart() {
            const ctx = document.getElementById('commoditiesChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Array.from({length: 30}, (_, i) => {
                        const date = new Date();
                        date.setDate(date.getDate() - (29 - i));
                        return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
                    }),
                    datasets: [
                        {
                            label: 'Gold (USD/oz)',
                            data: Array.from({length: 30}, () => Math.random() * 50 + 1900),
                            borderColor: '#f39c12',
                            backgroundColor: 'rgba(243, 156, 18, 0.1)',
                            borderWidth: 2,
                            tension: 0.3,
                            fill: true
                        },
                        {
                            label: 'Silver (USD/oz)',
                            data: Array.from({length: 30}, () => Math.random() * 3 + 22),
                            borderColor: '#95a5a6',
                            backgroundColor: 'rgba(149, 165, 166, 0.1)',
                            borderWidth: 2,
                            tension: 0.3,
                            fill: true
                        },
                        {
                            label: 'Oil (USD/barrel)',
                            data: Array.from({length: 30}, () => Math.random() * 5 + 70),
                            borderColor: '#e74c3c',
                            backgroundColor: 'rgba(231, 76, 60, 0.1)',
                            borderWidth: 2,
                            tension: 0.3,
                            fill: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Commodities Prices (30 Days)',
                            font: {
                                size: 16
                            }
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            grid: {
                                drawBorder: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        }

        // Example function to fetch real market data (would need to be adapted to your API)
        async function fetchMarketData() {
            try {
                // Example for S&P 500 data
                const response = await fetch(`${BASE_URL}?function=TIME_SERIES_DAILY&symbol=SPX&apikey=${API_KEY}`);
                const data = await response.json();
                
                // Process the data and update the charts
                console.log('Market data:', data);
                
                // Update UI with real data
                // updateChartsWithRealData(data);
                
            } catch (error) {
                console.error('Error fetching market data:', error);
            }
        }
    </script>
</body>
</html>