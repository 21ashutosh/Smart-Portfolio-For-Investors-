<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Portfolio Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .header {
            background: linear-gradient(135deg, #3498db 0%, #2c3e50 100%);
            color: white;
            padding: 1.5rem 0;
            margin-bottom: 2rem;
        }
        
        .card {
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
        }
        
        .positive-change {
            color: #2ecc71;
        }
        
        .negative-change {
            color: #e74c3c;
        }
        
        .chart-container {
            background: white;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="container">
            <h1><i class="fas fa-chart-pie me-2"></i>Simple Portfolio Tracker</h1>
            <p>Last updated: <span id="current-date"></span></p>
        </div>
    </div>

    <div class="container">
        <!-- Add Asset Form -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Add New Asset</h5>
            </div>
            <div class="card-body">
                <form id="add-asset-form">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="asset-name" class="form-label">Asset Name</label>
                            <input type="text" class="form-control" id="asset-name" placeholder="e.g. Apple Inc." required>
                        </div>
                        <div class="col-md-4">
                            <label for="asset-category" class="form-label">Category</label>
                            <select class="form-select" id="asset-category" required>
                                <option value="">Choose...</option>
                                <option value="Stocks">Stocks</option>
                                <option value="Crypto">Cryptocurrency</option>
                                <option value="Commodities">Commodities</option>
                                <option value="Bonds">Bonds</option>
                                <option value="Cash">Cash</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="asset-symbol" class="form-label">Symbol</label>
                            <input type="text" class="form-control" id="asset-symbol" placeholder="e.g. AAPL">
                        </div>
                        <div class="col-md-3">
                            <label for="asset-quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="asset-quantity" step="0.0001" min="0" required>
                        </div>
                        <div class="col-md-3">
                            <label for="asset-price" class="form-label">Purchase Price ($)</label>
                            <input type="number" class="form-control" id="asset-price" step="0.01" min="0" required>
                        </div>
                        <div class="col-md-3">
                            <label for="asset-current-price" class="form-label">Current Price ($)</label>
                            <input type="number" class="form-control" id="asset-current-price" step="0.01" min="0" required>
                        </div>
                        <div class="col-md-3">
                            <label for="purchase-date" class="form-label">Purchase Date</label>
                            <input type="date" class="form-control" id="purchase-date">
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary">Add Asset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Portfolio Summary -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Value</h5>
                        <p class="display-6" id="total-value">$0.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Profit/Loss</h5>
                        <p class="display-6" id="total-pl">$0.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Return %</h5>
                        <p class="display-6" id="total-return">0.00%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Number of Assets</h5>
                        <p class="display-6" id="asset-count">0</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Charts -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="chart-container">
                    <h5>Portfolio Allocation</h5>
                    <canvas id="allocation-chart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart-container">
                    <h5>Performance by Category</h5>
                    <canvas id="category-chart"></canvas>
                </div>
            </div>
        </div>

        <!-- Assets Table -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Your Assets</h5>
                <button id="analyze-btn" class="btn btn-light btn-sm" disabled>Analyze Portfolio</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="assets-table">
                        <thead>
                            <tr>
                                <th>Asset</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Purchase Price</th>
                                <th>Current Price</th>
                                <th>Value</th>
                                <th>Profit/Loss</th>
                                <th>Return %</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Assets will be added here via JavaScript -->
                            <tr id="no-assets">
                                <td colspan="9" class="text-center">No assets added yet. Use the form above to add assets.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Analysis Results Section (initially hidden) -->
        <div class="card mb-4" id="analysis-section" style="display: none;">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Portfolio Analysis</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Risk Analysis</h6>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Diversification Score</span>
                                <span id="diversification-score">N/A</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" id="diversification-bar" role="progressbar" style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Risk Level</span>
                                <span id="risk-level">N/A</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-warning" id="risk-bar" role="progressbar" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Recommendations</h6>
                        <ul id="recommendations-list" class="list-group">
                            <!-- Recommendations will be added here via JavaScript -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize portfolio data
        let portfolio = {
            assets: [],
            totalValue: 0,
            totalCost: 0
        };

        // Set current date
        document.getElementById('current-date').textContent = new Date().toLocaleDateString('en-US', { 
            weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' 
        });

        // Charts
        let allocationChart;
        let categoryChart;

        // Initialize charts
        function initCharts() {
            // Allocation Chart
            const allocationCtx = document.getElementById('allocation-chart').getContext('2d');
            allocationChart = new Chart(allocationCtx, {
                type: 'doughnut',
                data: {
                    labels: [],
                    datasets: [{
                        data: [],
                        backgroundColor: [
                            '#3498db', '#f39c12', '#2ecc71', '#9b59b6', '#e74c3c',
                            '#1abc9c', '#f1c40f', '#34495e', '#d35400', '#95a5a6'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'right'
                        }
                    }
                }
            });

            // Category Chart
            const categoryCtx = document.getElementById('category-chart').getContext('2d');
            categoryChart = new Chart(categoryCtx, {
                type: 'bar',
                data: {
                    labels: ['Stocks', 'Crypto', 'Commodities', 'Bonds', 'Cash'],
                    datasets: [{
                        label: 'Value by Category',
                        data: [0, 0, 0, 0, 0],
                        backgroundColor: '#3498db',
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Add an asset to the portfolio
        function addAsset(event) {
            event.preventDefault();
            
            // Get form values
            const name = document.getElementById('asset-name').value;
            const category = document.getElementById('asset-category').value;
            const symbol = document.getElementById('asset-symbol').value;
            const quantity = parseFloat(document.getElementById('asset-quantity').value);
            const purchasePrice = parseFloat(document.getElementById('asset-price').value);
            const currentPrice = parseFloat(document.getElementById('asset-current-price').value);
            const purchaseDate = document.getElementById('purchase-date').value;
            
            // Create asset object
            const asset = {
                id: Date.now(), // Use timestamp as unique ID
                name,
                category,
                symbol,
                quantity,
                purchasePrice,
                currentPrice,
                purchaseDate,
                value: quantity * currentPrice,
                cost: quantity * purchasePrice,
                pl: quantity * (currentPrice - purchasePrice),
                returnPct: ((currentPrice - purchasePrice) / purchasePrice) * 100
            };
            
            // Add asset to portfolio
            portfolio.assets.push(asset);
            
            // Update portfolio totals
            updatePortfolioTotals();
            
            // Add asset to table
            addAssetToTable(asset);
            
            // Update charts
            updateCharts();
            
            // Reset form
            document.getElementById('add-asset-form').reset();
            
            // Enable analyze button if we have assets
            if (portfolio.assets.length > 0) {
                document.getElementById('analyze-btn').disabled = false;
                document.getElementById('no-assets').style.display = 'none';
            }
        }

        // Add asset to the table
        function addAssetToTable(asset) {
            const tableBody = document.getElementById('assets-table').getElementsByTagName('tbody')[0];
            const row = document.createElement('tr');
            row.setAttribute('data-id', asset.id);
            
            const plClass = asset.pl >= 0 ? 'positive-change' : 'negative-change';
            const plSign = asset.pl >= 0 ? '+' : '';
            
            row.innerHTML = `
                <td>${asset.name} ${asset.symbol ? `(${asset.symbol})` : ''}</td>
                <td>${asset.category}</td>
                <td>${asset.quantity.toFixed(4)}</td>
                <td>$${asset.purchasePrice.toFixed(2)}</td>
                <td>$${asset.currentPrice.toFixed(2)}</td>
                <td>$${asset.value.toFixed(2)}</td>
                <td class="${plClass}">${plSign}$${asset.pl.toFixed(2)}</td>
                <td class="${plClass}">${plSign}${asset.returnPct.toFixed(2)}%</td>
                <td>
                    <button onclick="removeAsset(${asset.id})" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            `;
            
            tableBody.appendChild(row);
        }

        // Update portfolio totals
        function updatePortfolioTotals() {
            portfolio.totalValue = portfolio.assets.reduce((sum, asset) => sum + asset.value, 0);
            portfolio.totalCost = portfolio.assets.reduce((sum, asset) => sum + asset.cost, 0);
            const totalPL = portfolio.totalValue - portfolio.totalCost;
            const totalReturn = portfolio.totalCost > 0 ? (totalPL / portfolio.totalCost) * 100 : 0;
            
            document.getElementById('total-value').textContent = '$' + portfolio.totalValue.toFixed(2);
            document.getElementById('total-pl').textContent = '$' + totalPL.toFixed(2);
            document.getElementById('total-pl').className = totalPL >= 0 ? 'display-6 positive-change' : 'display-6 negative-change';
            document.getElementById('total-return').textContent = totalReturn.toFixed(2) + '%';
            document.getElementById('total-return').className = totalReturn >= 0 ? 'display-6 positive-change' : 'display-6 negative-change';
            document.getElementById('asset-count').textContent = portfolio.assets.length;
        }

        // Update charts
        function updateCharts() {
            // Update allocation chart
            const assetNames = portfolio.assets.map(asset => asset.name);
            const assetValues = portfolio.assets.map(asset => asset.value);
            
            allocationChart.data.labels = assetNames;
            allocationChart.data.datasets[0].data = assetValues;
            allocationChart.update();
            
            // Update category chart
            const categories = ['Stocks', 'Crypto', 'Commodities', 'Bonds', 'Cash'];
            const categoryValues = categories.map(cat => {
                return portfolio.assets
                    .filter(asset => asset.category === cat)
                    .reduce((sum, asset) => sum + asset.value, 0);
            });
            
            categoryChart.data.datasets[0].data = categoryValues;
            categoryChart.update();
        }

        // Remove asset from portfolio
        function removeAsset(id) {
            // Remove from array
            portfolio.assets = portfolio.assets.filter(asset => asset.id !== id);
            
            // Remove from table
            const row = document.querySelector(`tr[data-id="${id}"]`);
            if (row) row.remove();
            
            // Update totals and charts
            updatePortfolioTotals();
            updateCharts();
            
            // Hide analyze section if visible
            document.getElementById('analysis-section').style.display = 'none';
            
            // Display "no assets" message if needed
            if (portfolio.assets.length === 0) {
                document.getElementById('no-assets').style.display = '';
                document.getElementById('analyze-btn').disabled = true;
            }
        }

        // Analyze portfolio
        function analyzePortfolio() {
            // Show analysis section
            const analysisSection = document.getElementById('analysis-section');
            analysisSection.style.display = 'block';
            
            // Calculate diversification score
            let diversificationScore = 0;
            
            // More assets = better diversification (up to 10 assets)
            const assetCountScore = Math.min(portfolio.assets.length / 10, 1) * 30;
            
            // Category distribution (more evenly distributed = better score)
            const categories = ['Stocks', 'Crypto', 'Commodities', 'Bonds', 'Cash'];
            const categoryCount = categories.filter(cat => 
                portfolio.assets.some(asset => asset.category === cat)
            ).length;
            const categoryScore = (categoryCount / categories.length) * 40;
            
            // Asset concentration (lower is better)
            let maxAssetPercentage = 0;
            if (portfolio.totalValue > 0) {
                maxAssetPercentage = Math.max(...portfolio.assets.map(asset => 
                    (asset.value / portfolio.totalValue) * 100
                ));
            }
            const concentrationScore = (100 - maxAssetPercentage) / 100 * 30;
            
            // Total score
            diversificationScore = Math.round(assetCountScore + categoryScore + concentrationScore);
            
            // Calculate risk level based on asset categories
            let riskScore = 0;
            const riskWeights = {
                'Cash': 0,
                'Bonds': 2,
                'Commodities': 6,
                'Stocks': 7,
                'Crypto': 10
            };
            
            if (portfolio.totalValue > 0) {
                categories.forEach(cat => {
                    const catValue = portfolio.assets
                        .filter(asset => asset.category === cat)
                        .reduce((sum, asset) => sum + asset.value, 0);
                    const catPercentage = (catValue / portfolio.totalValue);
                    riskScore += catPercentage * riskWeights[cat];
                });
            }
            
            // Update UI
            document.getElementById('diversification-score').textContent = `${diversificationScore}/100`;
            document.getElementById('diversification-bar').style.width = `${diversificationScore}%`;
            
            const riskLevel = getRiskLevel(riskScore);
            document.getElementById('risk-level').textContent = `${riskLevel} (${riskScore.toFixed(1)}/10)`;
            document.getElementById('risk-bar').style.width = `${riskScore * 10}%`;
            
            // Generate recommendations
            generateRecommendations(diversificationScore, riskScore);
        }

        // Get risk level descriptor
        function getRiskLevel(score) {
            if (score < 2) return 'Very Low';
            if (score < 4) return 'Low';
            if (score < 6) return 'Moderate';
            if (score < 8) return 'High';
            return 'Very High';
        }

        // Generate portfolio recommendations
        function generateRecommendations(diversificationScore, riskScore) {
            const recommendationsList = document.getElementById('recommendations-list');
            recommendationsList.innerHTML = '';
            
            const recommendations = [];
            
            // Diversification recommendations
            if (diversificationScore < 50) {
                recommendations.push({
                    text: 'Consider adding more assets to increase diversification',
                    type: 'warning'
                });
            }
            
            if (portfolio.assets.length > 0) {
                // Check for category imbalance
                const categories = ['Stocks', 'Crypto', 'Commodities', 'Bonds', 'Cash'];
                const categoryValues = {};
                
                categories.forEach(cat => {
                    categoryValues[cat] = portfolio.assets
                        .filter(asset => asset.category === cat)
                        .reduce((sum, asset) => sum + asset.value, 0);
                });
                
                // If more than 50% in one category
                const highestCategory = Object.keys(categoryValues).reduce((a, b) => 
                    categoryValues[a] > categoryValues[b] ? a : b
                );
                
                if (portfolio.totalValue > 0 && categoryValues[highestCategory] / portfolio.totalValue > 0.5) {
                    recommendations.push({
                        text: `Consider reducing ${highestCategory} allocation (currently ${Math.round(categoryValues[highestCategory] / portfolio.totalValue * 100)}%)`,
                        type: 'warning'
                    });
                }
                
                // Risk level recommendations
                if (riskScore > 7) {
                    recommendations.push({
                        text: 'Your portfolio has high risk. Consider adding bonds or stable assets',
                        type: 'danger'
                    });
                } else if (riskScore < 3 && portfolio.assets.length > 2) {
                    recommendations.push({
                        text: 'Your portfolio is very conservative. Consider growth assets for better returns',
                        type: 'info'
                    });
                }
                
                // Missing major categories
                if (categoryValues['Stocks'] === 0) {
                    recommendations.push({
                        text: 'Consider adding some stocks for growth potential',
                        type: 'info'
                    });
                }
                
                if (categoryValues['Bonds'] === 0 && categoryValues['Cash'] === 0) {
                    recommendations.push({
                        text: 'Consider adding bonds or cash reserves for stability',
                        type: 'info'
                    });
                }
            }
            
            // If no specific recommendations
            if (recommendations.length === 0) {
                recommendations.push({
                    text: 'Your portfolio appears well balanced with good diversification',
                    type: 'success'
                });
            }
            
            // Add recommendations to the list
            recommendations.forEach(rec => {
                const li = document.createElement('li');
                li.className = `list-group-item list-group-item-${rec.type}`;
                li.innerHTML = `<i class="fas fa-info-circle me-2"></i>${rec.text}`;
                recommendationsList.appendChild(li);
            });
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('add-asset-form').addEventListener('submit', addAsset);
            document.getElementById('analyze-btn').addEventListener('click', analyzePortfolio);
            initCharts();
        });
    </script>
</body>
</html>