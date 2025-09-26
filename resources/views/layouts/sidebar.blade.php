
<div id="sidebar" class="app-sidebar">
    <div class="app-sidebar-content find-link" data-scrollbar="true" data-height="100%">
        <div class="menu">
            <div class="menu-header">Navigation</div>

            <div class="menu-item">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <div class="menu-icon"> <i class="fa fa-home"></i> </div>
                    <div class="menu-text">Dashboard</div>
                </a>
            </div>


            <div class="menu-item has-sub"> <a href="javascript:;" class="menu-link ">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Service List</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('service') }}" class="menu-link ">
                            <div class="menu-text"> Service List</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item has-sub"> <a href="javascript:;" class="menu-link ">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Testimonials</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('testimonial') }}" class="menu-link ">
                            <div class="menu-text"> Testimonial List</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item has-sub"> <a href="javascript:;" class="menu-link ">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Job Title</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('job') }}" class="menu-link ">
                            <div class="menu-text"> Job List</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item has-sub"> <a href="javascript:;" class="menu-link ">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Blogs</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('blog') }}" class="menu-link ">
                            <div class="menu-text"> Blog List</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item has-sub"> <a href="javascript:;" class="menu-link ">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Banners</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('banner') }}" class="menu-link ">
                            <div class="menu-text"> Banner List</div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class="menu-item has-sub"> <a href="javascript:;" class="menu-link ">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Our Gallary</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('gallary') }}" class="menu-link ">
                            <div class="menu-text"> Gallary List</div>
                        </a>
                    </div>
                </div>
            </div> --}}

              <div class="menu-item has-sub"> <a href="javascript:;" class="menu-link ">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Manage Pages</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('pages.edit', 1) }}" class="menu-link ">
                            <div class="menu-text">Get Quick Rides, Low Fares</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('pages.edit', 2) }}" class="menu-link ">
                            <div class="menu-text">Flexible Hours & High Earnings</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('pages.edit', 3) }}" class="menu-link ">
                            <div class="menu-text">Safety For All — Your Peace Of Mind</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('pages.edit', 4) }}" class="menu-link ">
                            <div class="menu-text">India's Beloved Bike Taxi Service</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('pages.edit', 5) }}" class="menu-link ">
                            <div class="menu-text"> Rider Terms – Bike Taxi</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('pages.edit', 6) }}" class="menu-link ">
                            <div class="menu-text">Rider Terms - Cabs & Auto </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('pages.edit', 7) }}" class="menu-link ">
                            <div class="menu-text">Partner Terms – Bike Taxi</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('pages.edit', 8) }}" class="menu-link ">
                            <div class="menu-text">Partner - Cabs & Auto </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('pages.edit', 9) }}" class="menu-link ">
                            <div class="menu-text">Corporate Affairs</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('pages.edit', 10) }}" class="menu-link ">
                            <div class="menu-text">Privacy Policy</div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="menu-item has-sub"> <a href="javascript:;" class="menu-link ">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Site Setting</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('company.edit', 1) }}" class="menu-link ">
                            <div class="menu-text">Manage Site Setting</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('seo') }}" class="menu-link ">
                            <div class="menu-text">Manage Seo</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub"> <a href="javascript:;" class="menu-link ">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Query Manager </div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('career.enquiry') }}" class="menu-link">
                            <div class="menu-text">Career Enquiry List</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('contact.enquiry') }}" class="menu-link">
                            <div class="menu-text">Contact Us Enquiry</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item d-flex"> <a href="javascript:;" class="app-sidebar-minify-btn ms-auto"
                    data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a> </div>
        </div>
    </div>
</div>
