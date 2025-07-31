<div class="modal" id="createCampaignModal">
                <div class="modal-content" style="max-width: 100%;">
                    <div class="modal-header">
                        <h2 class="modal-title">Create New Campaign</h2>
                        <button class="modal-close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="campaignForm">
                            <div class="form-group">
                                <label class="form-label">Campaign Name</label>
                                <input type="text" class="form-control" id="campaignName" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Subject</label>
                                <input type="text" class="form-control" id="campaignSubject" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Recipient Type</label>
                                <select class="form-control" id="recipientType" required>
                                    <option value="">Select Recipient Type</option>
                                    <option value="all">All Businesses</option>
                                    <option value="category">Specific Category</option>
                                    <option value="custom">Custom List</option>
                                </select>
                            </div>
                            <div class="form-group" id="categorySelection" style="display: none;">
                                <label class="form-label">Business Category</label>
                                <select class="form-control" id="businessCategory">
                                    <option value="pharmacy">Pharmacy</option>
                                    <option value="hospital">Hospital</option>
                                    <option value="clinic">Clinic</option>
                                    <option value="laboratory">Laboratory</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Content</label>
                                <textarea class="form-control" id="emailContent" rows="6" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Attachments</label>
                                <input type="file" class="form-control" id="campaignAttachment">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Schedule</label>
                                <select class="form-control" id="campaignSchedule">
                                    <option value="now">Send Immediately</option>
                                    <option value="schedule">Schedule for Later</option>
                                </select>
                            </div>
                            <div class="form-group" id="scheduleDateGroup" style="display: none;">
                                <label class="form-label">Schedule Date/Time</label>
                                <input type="datetime-local" class="form-control" id="scheduleDateTime">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" id="cancelCampaign">Cancel</button>
                        <button class="btn btn-primary" id="saveCampaign">Save Campaign</button>
                        <button class="btn btn-success" id="sendCampaign">Send Now</button>
                    </div>
                </div>
            </div><?php /**PATH D:\Projects\SCIZORA\resources\views/admin/businessmanagement/createcampaign.blade.php ENDPATH**/ ?>