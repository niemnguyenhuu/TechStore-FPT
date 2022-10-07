<header class="header_area">
    <div class="top_menu">
        <div class="container">
        <div class="row">
            <div class="col-lg-7">
            <div class="float-left">
                <p>Phone: 0374162121</p>
                <p>email: techstore@gmail.com</p>
            </div>
            </div>
            <div class="col-lg-5">
            <div class="float-right">
                <ul class="right_side">
                <li>
                    <a href="cart.html">
                    gift card
                    </a>
                </li>
                <li>
                    <a href="tracking.html">
                    Đơn Hàng
                    </a>
                </li>
                <li>
                    <a href="contact.html">
                    Liên Hệ
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="main_menu">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{route('index')}}">
            <img src="{{asset('images/techstore.png')}}" width="80px" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
                <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                    @foreach ($allCate as $cate)
                    <li class="nav-item submenu dropdown">
                    <a href="{{route('getProByCate',$cate->id)}}" class="nav-link dropdown-toggle">{{$cate->name}}</a>
                    <ul class="dropdown-menu">
                        @php
                           $cate_items=App\Models\Categories::find($cate->id)->Cate_items;
                        @endphp
                        @foreach ($cate_items as $item)
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('getProByCateItem',$item->id)}}">{{$item->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                    @endforeach
                    <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                </div>
    
                <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                    <li class="nav-item">
                    <a href="#" class="icons">
                        <i class="ti-search" aria-hidden="true"></i>
                    </a>
                    </li>
    
                    <li class="nav-item">
                    <a href="#" class="icons">
                        <i class="ti-shopping-cart"></i>
                    </a>
                    </li>
    
                    <li class="nav-item">
                    <a href="#" class="icons" data-toggle="modal" data-target="#myModal">
                        <i class="ti-user" aria-hidden="true"></i>
                    </a>
                    <div class="container">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog">
                          
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center">Đăng nhập</h4>
                              </div>
                              <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Tài khoản</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tài khoản">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Mật khẩu</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Lưu thông tin</label>
                                    </div>
                                    <button type="submit" class=" b-submit">Đăng nhập</button>
                                    
                                  </form>                        
                                </div>
                              <div class="modal-footer">
                                <p class="m-0">Bạn chưa có tài khoản ? <a href="/register"  data-toggle="modal" data-target="#myModal">Đăng ký</a></p>
                                
                            </div>
                            </div>
                            
                          </div>
                        </div>
                        
                      </div>
                    </li>
    
                    <li class="nav-item">
                        <a href="#" class="icons">
                            <i class="ti-heart" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </nav>
        </div>
    </div>
    </header>