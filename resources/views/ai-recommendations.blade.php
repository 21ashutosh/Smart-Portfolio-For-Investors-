@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <!-- Subscription Required Banner -->
    <div class="alert alert-warning rounded-0 mb-0 text-center">
        <strong>Premium Feature:</strong> Subscribe to unlock AI-powered investment recommendations
        <a href="/subscription" class="btn btn-sm btn-warning ml-3">Upgrade Now</a>
    </div>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <!-- Cleaner Card Header -->
                    <div class="card-header bg-info text-white py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h4 mb-1">AI Investment Advisor</h2>
                                <p class="small mb-0">Smart, data-driven recommendations for your portfolio</p>
                            </div>
                            <div class="subscription-badge">
                                <span class="badge badge-pill badge-light text-dark">PREMIUM</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body px-4">
                        <!-- Locked AI Feature Preview -->
                        <div class="text-center mb-5 py-4">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb" alt="AI Analysis" class="img-fluid mb-3" style="max-height: 120px; filter: blur(2px); opacity: 0.7;">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-lock fa-3x text-warning"></i>
                                </div>
                            </div>
                            <h3>Unlock Your Customized Investment Plan</h3>
                            <p class="text-muted">Subscribe to access AI-powered recommendations based on your holdings</p>
                            <button class="btn btn-info btn-lg mt-3" data-toggle="modal" data-target="#subscriptionModal">
                                Get Started - $9.99/month
                            </button>
                        </div>

                        <!-- How it works section - cleaner layout -->
                        <div class="mb-5">
                            <h4 class="text-center mb-4">How Our AI Advisor Works</h4>
                            <div class="row">
                                <div class="col-md-3 mb-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper bg-info-soft rounded-circle mb-3 mx-auto" style="width: 60px; height: 60px; line-height: 60px;">
                                                <i class="fas fa-chart-line fa-lg text-info"></i>
                                            </div>
                                            <h5 class="mb-2">Portfolio Analysis</h5>
                                            <p class="small text-muted mb-0">Comprehensive review of your current investments</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper bg-info-soft rounded-circle mb-3 mx-auto" style="width: 60px; height: 60px; line-height: 60px;">
                                                <i class="fas fa-globe fa-lg text-info"></i>
                                            </div>
                                            <h5 class="mb-2">Market Scan</h5>
                                            <p class="small text-muted mb-0">Real-time analysis of market conditions</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper bg-info-soft rounded-circle mb-3 mx-auto" style="width: 60px; height: 60px; line-height: 60px;">
                                                <i class="fas fa-cogs fa-lg text-info"></i>
                                            </div>
                                            <h5 class="mb-2">AI Processing</h5>
                                            <p class="small text-muted mb-0">Proprietary algorithms analyze your data</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper bg-info-soft rounded-circle mb-3 mx-auto" style="width: 60px; height: 60px; line-height: 60px;">
                                                <i class="fas fa-lightbulb fa-lg text-info"></i>
                                            </div>
                                            <h5 class="mb-2">Smart Recommendations</h5>
                                            <p class="small text-muted mb-0">Personalized suggestions for your portfolio</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sample Recommendation Preview -->
                        <div class="card mb-5 border-info">
                            <div class="card-header bg-light">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">Sample Recommendation Preview</h4>
                                    <span class="badge badge-warning">SUBSCRIBE TO UNLOCK</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Action</th>
                                                <th>Investment</th>
                                                <th>Reason</th>
                                                <th>Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="blur-row">
                                                <td><span class="badge badge-success">Buy More</span></td>
                                                <td>***** ******</td>
                                                <td>Growing sector with strong earnings</td>
                                                <td>+5%</td>
                                            </tr>
                                            <tr class="blur-row">
                                                <td><span class="badge badge-warning">Reduce</span></td>
                                                <td>***** ******</td>
                                                <td>Interest rates expected to rise</td>
                                                <td>-3%</td>
                                            </tr>
                                            <tr class="blur-row">
                                                <td><span class="badge badge-primary">Hold</span></td>
                                                <td>***** ******</td>
                                                <td>Balanced risk/reward currently</td>
                                                <td>No change</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center mt-3">
                                    <button class="btn btn-info" data-toggle="modal" data-target="#subscriptionModal">
                                        Subscribe to View Full Recommendations
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits section - more compact -->
                        <div class="row mb-4">
                            <div class="col-md-4 mb-3">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center p-3">
                                        <i class="fas fa-bolt fa-2x text-warning mb-2"></i>
                                        <h5 class="mb-2">Quick Adjustments</h5>
                                        <p class="small text-muted mb-0">Small changes that can make a big difference to your returns</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center p-3">
                                        <i class="fas fa-shield-alt fa-2x text-success mb-2"></i>
                                        <h5 class="mb-2">Risk Managed</h5>
                                        <p class="small text-muted mb-0">Tailored to your personal risk tolerance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center p-3">
                                        <i class="fas fa-sync-alt fa-2x text-info mb-2"></i>
                                        <h5 class="mb-2">Weekly Updates</h5>
                                        <p class="small text-muted mb-0">Fresh recommendations as markets change</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial section -->
                        <div class="card bg-light border-0 mb-4">
                            <div class="card-body text-center py-4">
                                <i class="fas fa-quote-left fa-2x text-muted mb-3"></i>
                                <p class="lead font-italic mb-3">"The AI recommendations helped me rebalance my portfolio just before the market shift, saving me thousands."</p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="https://randomuser.me/api/portraits/women/45.jpg" class="rounded-circle mr-2" width="40" alt="User">
                                    <div class="text-left">
                                        <h6 class="mb-0">Sarah Johnson</h6>
                                        <small class="text-muted">Premium Member since 2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light text-center py-3">
                        <button class="btn btn-info px-4 mr-2" data-toggle="modal" data-target="#subscriptionModal">
                            <i class="fas fa-crown mr-2"></i>Unlock AI Features
                        </button>
                        <button class="btn btn-outline-info px-4">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Subscription Modal -->
<div class="modal fade" id="subscriptionModal" tabindex="-1" role="dialog" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="subscriptionModalLabel">Upgrade to Premium</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <i class="fas fa-crown fa-4x text-warning mb-3"></i>
                    <h4>Unlock AI Investment Advisor</h4>
                    <p class="text-muted">Get personalized recommendations to optimize your portfolio</p>
                </div>
                
                <div class="card mb-3 border-info">
                    <div class="card-body">
                        <h5 class="card-title">Premium Features</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Personalized investment recommendations</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Weekly portfolio rebalancing alerts</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Risk analysis and optimization</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Market trend insights</li>
                            <li><i class="fas fa-check-circle text-success mr-2"></i> Priority customer support</li>
                        </ul>
                    </div>
                </div>
                
                <div class="text-center">
                    <h3 class="mb-3">$9.99 <small class="text-muted">/ month</small></h3>
                    <button class="btn btn-info btn-lg btn-block">Start 7-Day Free Trial</button>
                    <p class="small text-muted mt-2">Cancel anytime. No commitment.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom CSS for cleaner layout */
    .card-header h2 {
        font-size: 1.5rem;
        line-height: 1.3;
    }
    
    .blur-row {
        color: transparent;
        text-shadow: 0 0 8px rgba(0,0,0,0.5);
    }
    
    .blur-row .badge {
        color: inherit;
        text-shadow: none;
    }
    
    .icon-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .bg-info-soft {
        background-color: rgba(23, 162, 184, 0.1);
    }
</style>
@endsection