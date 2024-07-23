<?php

$pagetitle = "Account Management";
$pagesubtitle = 'General';
$pagetype = "";

include($_SERVER["DOCUMENT_ROOT"].'/assets/php/dashboardHeader.php');

echo '<title>'.$pagetitle.' - '.$pagesubtitle.'</title>';

?>

    <section class="section first-dashboard-area-cards">
        <div class="container caliweb-container">
            <div class="caliweb-two-grid special-caliweb-spacing setttings-shifted-spacing">
                <div class="caliweb-card dashboard-card sidebar-card">
                    <aside class="caliweb-sidebar">
                        <ul class="sidebar-list-linked">
                            <a href="/dashboard/accountManagement/" class="sidebar-link-a active" style="margin-bottom: 4px; font-size: 15px; display:flex;  justify-content: space-between;" >
                                Overview
                                <i class="lnr lnr-chevron-down arrow" style="padding-top:2px;" ></i>
                            </a>

                            <ul class="sub-menu" style="padding:0; list-style:none;">
                                <li class="sidebar-link">
                                    <a href="" class="sidebar-link-a">
                                        Paperless
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="" class="sidebar-link-a">
                                        Travel
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="" class="sidebar-link-a">
                                        Show Or Hide Accpunt
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="" class="sidebar-link-a">
                                        Set Primary Account
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="" class="sidebar-link-a">
                                        Nickname Account
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="" class="sidebar-link-a">
                                        Manage Custom Groups
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="" class="sidebar-link-a">
                                        Manage Linked Accounts
                                    </a>
                                </li>
                            </ul>
                            <a href="/dashboard/accountManagement/accountSettings/" class="sidebar-link-a active" style="margin-bottom: 4px; font-size: 15px;  display:flex;  justify-content: space-between;" >
                                Account Settings
                                <i class="lnr lnr-chevron-down arrow" style="padding-top:2px;" ></i>
                            </a>

                            <ul class="sub-menu"  style="padding:0; list-style:none;">
                                <li class="sidebar-link">
                                    <a href="dashboard/accountManagement/accountSettings/SetNick" class="sidebar-link-a">
                                        Set Nickname
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="dashboard/accountManagement/SetNick" class="sidebar-link-a">
                                        Intergrations
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="dashboard/accountManagement/AccountStatus" class="sidebar-link-a">
                                        Show Or Hide Account
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="" class="sidebar-link-a">
                                        Set Primary Account
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="dashboard/accountManagement/Managegroups" class="sidebar-link-a">
                                        Manage Custom Groups
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a href="dashboard/accountManagement/Managelinkacc" class="sidebar-link-a">
                                        Manage Linked Accounts
                                    </a>
                                </li>
                            </ul>
                            <a href="/dashboard/accountManagement/personalDetails/" class="sidebar-link-a active" style="margin-bottom: 4px; font-size: 15px; display:flex;  justify-content: space-between;" >
                                Your Personal Details
                                <i class="lnr lnr-chevron-down arrow" style="padding-top:2px;" ></i>
                            </a>
                            <a href="/dashboard/accountManagement/privacyAndSecurity/" class="sidebar-link-a active" style="margin-bottom: 4px; font-size: 15px;  display:flex;  justify-content: space-between;" >
                                Sign-In Security
                                <i class="lnr lnr-chevron-down arrow" style="padding-top:2px;" ></i>
                            </a>
                        </ul>
                    </aside>
                </div>
            </div>
                <div class="caliweb-card dashboard-card">
                    <div class="card-header">
                        <div class="display-flex align-center" style="justify-content:space-between;">
                            <div>
                                <h3 class="font-size-20 no-padding">Personal Details</h3>
                            </div>
                            <div>
                                <a href="/dashboard/accountManagement/personalDetails/" class="careers-link" style="text-decoration:none;"><span class="display-flex align-center">Return to panel <span class="lnr lnr-chevron-right" style="margin-left:10px;"></span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <h3 class="font-size-20 no-padding" style="font-weight:300;">Primary</h3>
                            <div class="caliweb-horizantal-spacer" style="margin-top:20px; margin-bottom:20px;"></div>
                            <p class="font-14px">Please fill with the corresponding fields to update your information.</p>
                        </div>

                        <div style="margin-left:auto; margin-right:auto; width:60%;">
                            <div class="caliweb-grid caliweb-two-grid" style="margin-top:5%;">
                                <div>
                                    <p>Business Address</p>
                                </div>
                                <div>
                                    <p>
                                    <form <div class="caliweb-login-box-content caliweb-container">
                                        <div class="caliweb-login-box-body">
                                            <form action="" method="POST" id="caliweb-form-plugin" class="caliweb-ix-form-login">
                                                <div class="form-control">
                                                    <label for="address" class="text-gray-label"></label>
                                                    <input type="address" style="align-content: center" class="form-input" name="address" id="address" placeholder="Enter your business address here" required="" />
                                                </div>
                                            </form>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="caliweb-grid caliweb-two-grid" style="margin-top:-8%;">
                                    <div>
                                        <p>Business Email</p>
                                    </div>
                                    <div>
                                        <p>
                                            <br>
                                        <div class="caliweb-login-box-content">
                                            <div class="caliweb-login-box-body">
                                                <form action="" method="POST" id="caliweb-form-plugin" class="caliweb-ix-form-login" style="margin-inline: auto">
                                                    <div class="form-control">
                                                        <label for="emailaddress" class="text-gray-label"></label>
                                                        <input  type="email" class="form-input" name="emailaddress" id="emailaddress" placeholder="Enter your business email address here" required="" />
                                                    </div>
                                                </form>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>



<?php


?>