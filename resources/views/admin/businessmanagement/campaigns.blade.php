<div id="campaigns-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">Email Campaigns</h1>
                    <button class="btn btn-primary" id="createCampaignBtn">
                        <i class="icon">➕</i> Create Campaign
                    </button>
                </div>

                <!-- Campaign Filters -->
                <div class="table-container mb-20">
                    <div style="padding: 15px; display: grid; grid-template-columns: 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label">Search Campaigns</label>
                            <input type="text" class="form-control" id="campaignSearch" placeholder="Name, subject...">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="form-control" id="campaignStatusFilter">
                                <option value="all">All Campaigns</option>
                                <option value="draft">Draft</option>
                                <option value="scheduled">Scheduled</option>
                                <option value="sent">Sent</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Date Range</label>
                            <select class="form-control" id="campaignDateFilter">
                                <option value="all">All Time</option>
                                <option value="7">Last 7 Days</option>
                                <option value="30">Last 30 Days</option>
                            </select>
                        </div>
                    </div>
                    <div class="apply-filters">
                        <button class="btn btn-primary" id="applyCampaignFilters">Apply Filters</button>
                    </div>
                </div>

                <!-- Campaigns Table -->
                <div class="table-container">
                    <div class="table-header">
                        <h2 class="section-title">All Campaigns</h2>
                        <div>
                            <button class="btn btn-secondary btn-sm" id="exportCampaignsBtn">
                                <i class="icon">📄</i> Export
                            </button>
                        </div>
                    </div>
                    <table id="campaignsTable">
                        <thead>
                            <tr>
                                <th>Campaign ID</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Recipients</th>
                                <th>Status</th>
                                <th>Sent Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#CMP-3001</td>
                                <td>New Year Promotion</td>
                                <td>Special Discount for 2024</td>
                                <td>All Businesses</td>
                                <td><span class="status-badge status-active">Sent</span></td>
                                <td>Dec 1, 2023</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#CMP-3002</td>
                                <td>Product Update</td>
                                <td>New Features Available</td>
                                <td>Pharmacy Category</td>
                                <td><span class="status-badge status-pending">Scheduled</span></td>
                                <td>Dec 20, 2023</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>