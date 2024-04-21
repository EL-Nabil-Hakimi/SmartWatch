@if(session()->get('user_id'))						
					
					@foreach ($products as $item)
						
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item ADDPRODUCT" data-product-id="{{$item->id}}">
							<img src="{{$item->image}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">{{$item->name}}</h3>
							<strong class="product-price">${{$item->prix}}</strong>
							
							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					
					
					@endforeach
					@else 
					@foreach ($products as $item)
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item signin_user" data-href="login">
							<img src="{{$item->image}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">{{$item->name}}</h3>
							<strong class="product-price">${{$item->prix}}</strong>
							<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
						</div> 
						@endforeach

					@endif