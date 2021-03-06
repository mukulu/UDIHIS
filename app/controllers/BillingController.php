<?php 
class BillingController  extends BaseController{
    
    public function getIndex(){
            return View::make("billing.billing");
            
}
    public function getEditService(){
            return View::make("billing.edit_service");
            
}

    public function getBills(){

        if(isset($_GET['pay'])){
             $update = Payment::find($_GET['pay']);
             $update->status='paid';
             $update->save();
            
        }
	
        $payments = Payment::where('status','=','unpaid')->get();
        return  View::make('billing.Pending_bills')->with('payments',$payments);

    }
    
    public function getInsurance(){
            return View::make("billing.Insurance_management");
    }
    

    public function getService(){
     
  	if(isset($_GET['edit'])){
			$inputs = Input::all();
			$service = Service::where('id',$_GET['edit'])
                                ->update(array(
				"name"=>$inputs['name'],
				"price"=>$inputs['Price']

				));
			if ($service) {
                            
			   return Redirect::to('service_management?msg=3');
                        }else{
                            
                            return Redirect::to('service_management?msg=4');
                        }
            
        }  
	
	if(isset($_GET['dlt'])){
            Service::destroy($_GET['dlt']);
            return Redirect::to('service_management?msg=5');
        } 
	
       $services = Service::get();
       return  View::make('billing.service_management')->with('services',$services);

    }
    
    public function addService(){
                
                 
               	$inputs = Input::all();
			$service = Service::create(array(
				"name"=>$inputs['service_name'],
				"price"=>$inputs['service_price']
				

				));
			if ($service) {
                            
			   return Redirect::to('service_management?msg=1');
                        }else{
                           
                            return Redirect::to('service_management?msg=2');
                        }
  	
          }  
    public function getReports(){
            return View::make("billing.reports_billing");
    }
    
    public function getProfile(){
            return View::make("billing.profile_billing");
    }
    
 }
 
