/**
 * Created by ji Sung on 6/19/2016.
 */
function calcurator(){ alert("3333333");}

function calcurator(param_calcurator){


	var distance = 0;
	var distance_price = 0;
	var hour = 0;
	var hour_price = 0;

	/*<label name='sub_category_id' >{{sub_category_id}}</label>
	<label name='default_price' >{{default_price}}</label>
	<label name='default_rate'  >{{default_rate}}</label>
	<label name='platform_fee'  >{{platform_fee}}</label>
	<label name='delivery_fee' >{{delivery_fee}}</label>
	<label name='basic_distance'  > {{basic_distance}}</label>
	<label name='add_distance'  >{{add_distance}}</label>
	<label name='add_distance_fee'>{{add_distance_fee}}</label>
	<label name='distance_unit' >{{distance_unit}}</label>	
	<label name='add_weight' >{{add_weight}}</label>
	<label name='add_weight_fee'>{{add_weight_fee}}</label>	
	<label name='weight_unit'>{{weight_unit}}</label>	

   	<input size="20" type="text"  placeholder="hour" id="order_item_hour"  ng-change="changePrice()"   ng-model="order.hour" >
	<input size="20" type="text"  placeholder="distance" id="order_item_distance"  ng-change="changePrice()"   ng-model="order.distance">
	<input size="20" type="text"  placeholder="weight" id="order_item_weight"  ng-change="changePrice()"   ng-model="order.weight">
			
			
			param_calcurator['distance_unit']=param_calcurator['distance_unit'];
			param_calcurator['basic_distance']=param_calcurator['basic_distance'];
			param_calcurator['order.distance']=param_calcurator['order.distance'];
			param_calcurator['default_price']=param_calcurator['default_price'];
			param_calcurator['add_distance_fee']=param_calcurator['add_distance_fee'];
			param_calcurator['add_distance']=param_calcurator['add_distance'];
			param_calcurator['order.hour']=param_calcurator['order.hour'];
			param_calcurator['order.weight']=param_calcurator['order.weight'];
			param_calcurator['weight_unit']=param_calcurator['weight_unit'];
			param_calcurator['add_weight_fee']=param_calcurator['add_weight']_fee;
			param_calcurator['add_weight']=param_calcurator['add_weight'];
			param_calcurator['order.price']=param_calcurator['order.price'];

	*/
	//alert("distance_unit"+param_calcurator['distance_unit']);
	console.log("distance_unit"+param_calcurator['distance_unit']);
	
	if(param_calcurator['distance_unit'] == 'Km'){
	// 거리 계산 / 초과 거리 계산
	console.log(param_calcurator['basic_distance'] +'<-km->'+param_calcurator['order.distance']);
	
	//alert(param_calcurator['basic_distance'] +'<-km->'+param_calcurator['order.distance']);
		if(param_calcurator['basic_distance'] >= param_calcurator['order.distance']){
			//기본거리			
			distance_price =   parseFloat(param_calcurator['default_price'] * 1);
			
		}else{
			//초과거리
			var temp_distance= param_calcurator['order.distance'] - param_calcurator['basic_distance'];
			//distance = Math.ceil(temp_distance / result[11]);
			distance_price =  parseFloat((param_calcurator['default_price'] * 1) + (param_calcurator['add_distance_fee'] *  Math.ceil(temp_distance / param_calcurator['add_distance'])));
			
		}
	}else{
	// 시간 계산 / 초과 시간 계산 	
	//alert(param_calcurator['basic_distance'] +'<-hour->'+param_calcurator['order.hour']);	 $scope.order.quantity
	//alert(param_calcurator['basic_distance'] +'<-hour->'+param_calcurator['order.hour']);	 
	console.log(param_calcurator['basic_distance'] +'<-hour->'+param_calcurator['order.hour']);
		if(param_calcurator['order.hour'] == undefined){
			param_calcurator['order.hour'] = 1;
		}
		
		if(param_calcurator['basic_distance'] >= param_calcurator['order.hour']){
			//기본시간			
			hour_price =  param_calcurator['default_price'] * 1;
			
		}else{
			//초과시간
			var temp_hour= param_calcurator['order.hour'] - param_calcurator['basic_distance'];
			//distance = Math.ceil(temp_distance / result[11]);
			hour_price =  parseFloat((param_calcurator['default_price'] * 1) + (param_calcurator['add_distance_fee'] *  Math.ceil(temp_hour / param_calcurator['add_distance'])));
		}
		console.log("hour_price"+hour_price);	
	}
	/*$("#sub_category_id").html(result[0]);
	$("#default_price").html(result[1]);
	$("#default_rate").html(result[2]);
	$("#platform_fee").html(result[3]);
	$("#delivery_fee").html(result[4]);
	$("#basic_distance").html(result[5]);
	$("#add_distance_fee").html(result[6]);				
	$("#distance_unit").html(result[7]);
	$("#add_weight").html(result[8]);
	$("#add_weight_fee").html(result[9]);
	$("#weight_unit").html(result[10]);
	$("#add_distance").html(result[11])*/
	var weight_price=0;
	var temp_weight=0;			
	if(param_calcurator['weight_unit'] != ''){
		// 무게 계산 / 초과 무게 계산
		
		if(param_calcurator['order.weight'] == undefined){
			param_calcurator['order.weight'] = 1;
		}
		
			if(20 >= param_calcurator['order.weight']){
				//무게			- 초과금 없음.
				weight_price =  0;					
			}else{
				//초과무게
				var temp_weight= param_calcurator['order.weight'] - 20;
				//distance = Math.ceil(temp_distance / result[11]);
				
			//alert(param_calcurator['add_weight_fee'] +'*'+  'Math.ceil('+temp_weight+' / '+param_calcurator['add_weight']+')==>'+param_calcurator['add_weight_fee']_fee *  Math.ceil(temp_weight / param_calcurator['add_weight']));
		
				weight_price = parseFloat(param_calcurator['add_weight_fee'] *  Math.ceil(temp_weight / param_calcurator['add_weight']));
			}
	}

	

	// 1. 아이템 총 합계
	//param_calcurator['order.price']
	
	// 2. 시급/ 거리/ 무게 계산	- 딜리버리 기사가 버는돈.		
	var total_fee = parseFloat(distance_price + hour_price + weight_price);

	// 3. 총 시급의 15% poomat가져감.
	var total_service_fee = parseFloat(total_fee /100 * param_calcurator['delivery_fee']);

	// 4. 1+2+3 의 텍스 13% 텍스.
	var tax_price_temp = parseFloat(param_calcurator['order.price']Tax + total_fee +total_service_fee);
	var total_price_tax =  parseFloat(tax_price_temp /100 * 13);

	// 5. tip  일단 여기선 0으로 치고 고객화면에서 계산 되도록 한다.
	var total_price_tip = 0;		
	
	
	
	var result=[];
	result['order_service_fee']= total_service_fee;
	result['order_delivery_fee']= total_fee-total_service_fee-param_calcurator['platform_fee'];
	result['order_platform_fee']= param_calcurator['platform_fee'];
	result['order_tax']= total_price_tax;
	result['order_total_price']= parseFloat(param_calcurator['order.price'] + total_service_fee + total_fee) +  parseFloat(total_price_tax);
	
	return result;
	
}