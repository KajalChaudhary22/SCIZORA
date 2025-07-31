<div id="reviews-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">Review Moderation</h1>
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <button class="btn btn-secondary" id="reviewSettingsBtn">
                            <i class="icon">⚙️</i> Settings
                        </button>
                    </div>
                </div>
                
                <!-- Review Filters -->
                <div class="table-container mb-20">
                    <div style="padding: 15px; display: grid; grid-template-columns: 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label">Search Reviews</label>
                            <input type="text" class="form-control" id="reviewSearch" placeholder="User, business, content...">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Review Status</label>
                            <select class="form-control" id="reviewStatusFilter">
                                <option value="all">All Reviews</option>
                                <option value="pending">Pending Approval</option>
                                <option value="approved">Approved</option>
                                <option value="rejected">Rejected</option>
                                <option value="flagged">Flagged</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Rating</label>
                            <select class="form-control" id="reviewRatingFilter">
                                <option value="all">All Ratings</option>
                                <option value="5">★★★★★</option>
                                <option value="4">★★★★☆</option>
                                <option value="3">★★★☆☆</option>
                                <option value="2">★★☆☆☆</option>
                                <option value="1">★☆☆☆☆</option>
                            </select>
                        </div>
                    </div>
                    <div class="apply-filters">
                        <button class="btn btn-primary" id="applyReviewFilters">Apply Filters</button>
                    </div>
                </div>
                
                <!-- Reviews List -->
                <div class="table-container">
                    <div class="table-header">
                        <h2 class="section-title">Reviews to Moderate (342)</h2>
                        <div>
                            <button class="btn btn-secondary btn-sm" id="exportReviewsBtn">
                                <i class="icon">📄</i> Export
                            </button>
                        </div>
                    </div>
                    <div class="review-cards" id="reviewsList">
                        <div class="review-card" data-status="pending" data-rating="5">
                            <div class="review-header">
                                <div>
                                    <div class="review-user">David Lee</div>
                                    <div class="review-time">For: MediCare Pharmaceuticals • 2 hours ago</div>
                                </div>
                                <div>
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                            </div>
                            <div class="review-stars">★★★★★</div>
                            <div class="review-text">
                                Excellent service and fast delivery. The medication was exactly as described and arrived in perfect condition. The staff was very helpful and knowledgeable. I would definitely recommend this pharmacy to others.
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-success btn-sm approve-review">Approve</button>
                                <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                <button class="btn btn-secondary btn-sm view-review">View Details</button>
                            </div>
                        </div>
                        <div class="review-card" data-status="pending" data-rating="3">
                            <div class="review-header">
                                <div>
                                    <div class="review-user">Rachel Green</div>
                                    <div class="review-time">For: BioTech Solutions • 5 hours ago</div>
                                </div>
                                <div>
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                            </div>
                            <div class="review-stars">★★★☆☆</div>
                            <div class="review-text">
                                The product quality was good but the delivery took longer than expected. Customer service was helpful though and resolved my issue promptly. The packaging could be improved to prevent damage during shipping.
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-success btn-sm approve-review">Approve</button>
                                <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                <button class="btn btn-secondary btn-sm view-review">View Details</button>
                            </div>
                        </div>
                        <div class="review-card negative" data-status="pending" data-rating="1">
                            <div class="review-header">
                                <div>
                                    <div class="review-user">Tom Wilson</div>
                                    <div class="review-time">For: City General Hospital • 1 day ago</div>
                                </div>
                                <div>
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                            </div>
                            <div class="review-stars">★☆☆☆☆</div>
                            <div class="review-text">
                                Very disappointed with my experience. The staff was rude and unprofessional. I waited for over two hours past my appointment time. The facilities were not clean and the equipment looked outdated. Would not recommend.
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-success btn-sm approve-review">Approve</button>
                                <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                <button class="btn btn-secondary btn-sm view-review">View Details</button>
                            </div>
                        </div>
                        <div class="review-card positive" data-status="pending" data-rating="5">
                            <div class="review-header">
                                <div>
                                    <div class="review-user">Lisa Brown</div>
                                    <div class="review-time">For: Wellness Clinic • 2 days ago</div>
                                </div>
                                <div>
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                            </div>
                            <div class="review-stars">★★★★★</div>
                            <div class="review-text">
                                Outstanding service! Dr. Smith was very thorough and took the time to explain everything clearly. The clinic was clean and modern. The reception staff was friendly and efficient. Best healthcare experience I've had in years.
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-success btn-sm approve-review">Approve</button>
                                <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                <button class="btn btn-secondary btn-sm view-review">View Details</button>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 12px 15px; border-top: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                        <div>Showing 1 to 4 of 342 entries</div>
                        <div style="display: flex; gap: 5px; flex-wrap: wrap;">
                            <button class="btn btn-secondary btn-sm">Previous</button>
                            <button class="btn btn-primary btn-sm">1</button>
                            <button class="btn btn-secondary btn-sm">2</button>
                            <button class="btn btn-secondary btn-sm">3</button>
                            <button class="btn btn-secondary btn-sm">Next</button>
                        </div>
                    </div>
                </div>
            </div>