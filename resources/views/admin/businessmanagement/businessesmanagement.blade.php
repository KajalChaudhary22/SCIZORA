 <div id="business-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">Business Management</h1>
                    <button class="btn btn-primary" id="addBusinessBtn">
                        <i class="icon">➕</i> Add Business
                    </button>
                </div>
                
                <!-- Business Filters -->
                <div class="table-container mb-20">
                    <div style="padding: 15px; display: grid; grid-template-columns: 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label">Search Businesses</label>
                            <input type="text" class="form-control" id="businessSearch" placeholder="Name, category, location...">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Business Status</label>
                            <select class="form-control" id="businessStatusFilter">
                                <option value="all">All Businesses</option>
                                <option value="active">Active</option>
                                <option value="pending">Pending Approval</option>
                                <option value="suspended">Suspended</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Business Category</label>
                            <select class="form-control" id="businessCategoryFilter">
                                <option value="all">All Categories</option>
                                <option value="pharmacy">Pharmacy</option>
                                <option value="hospital">Hospital</option>
                                <option value="clinic">Clinic</option>
                                <option value="laboratory">Laboratory</option>
                                <option value="distributor">Distributor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Location</label>
                            <select class="form-control" id="businessLocationFilter">
                                <option value="all">All Locations</option>
                                <option value="us">United States</option>
                                <option value="uk">United Kingdom</option>
                                <option value="ca">Canada</option>
                                <option value="au">Australia</option>
                                <option value="in">India</option>
                            </select>
                        </div>
                    </div>
                    <div class="apply-filters">
                        <button class="btn btn-primary" id="applyBusinessFilters">Apply Filters</button>
                    </div>
                </div>
                
                <!-- Businesses Table -->
                <div class="table-container">
                    <div class="table-header">
                        <h2 class="section-title">All Businesses (1,832)</h2>
                        <div>
                            <button class="btn btn-secondary btn-sm" id="exportBusinessesBtn">
                                <i class="icon">📄</i> Export
                            </button>
                        </div>
                    </div>
                    <table id="businessesTable">
                        <thead>
                            <tr>
                                <th>Business ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Owner</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-status="active" data-category="pharmacy" data-location="us">
                                <td>#BUS-5001</td>
                                <td>MediCare Pharmaceuticals</td>
                                <td>Pharmacy</td>
                                <td>New York, USA</td>
                                <td>Sarah Johnson</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Suspend</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="pending" data-category="laboratory" data-location="uk">
                                <td>#BUS-5002</td>
                                <td>BioTech Solutions</td>
                                <td>Laboratory</td>
                                <td>London, UK</td>
                                <td>Michael Chen</td>
                                <td><span class="status-badge status-pending">Pending</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn reject">Reject</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="active" data-category="hospital" data-location="us">
                                <td>#BUS-5003</td>
                                <td>City General Hospital</td>
                                <td>Hospital</td>
                                <td>Chicago, USA</td>
                                <td>Emma Wilson</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Suspend</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="suspended" data-category="distributor" data-location="ca">
                                <td>#BUS-5004</td>
                                <td>PharmaPlus Distributors</td>
                                <td>Distributor</td>
                                <td>Toronto, Canada</td>
                                <td>David Kim</td>
                                <td><span class="status-badge status-suspended">Suspended</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn activate">Activate</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="active" data-category="clinic" data-location="au">
                                <td>#BUS-5005</td>
                                <td>Wellness Clinic</td>
                                <td>Clinic</td>
                                <td>Sydney, Australia</td>
                                <td>Robert Taylor</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Suspend</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="padding: 12px 15px; border-top: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                        <div>Showing 1 to 5 of 1,832 entries</div>
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