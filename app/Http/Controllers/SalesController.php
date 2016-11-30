<?php
//
//                  ADD DISCOUNT FEATURE
//                  HAVE TO ADD REPORT BUTTON ON SALES
//                  HAVE TO PUT VALIDATION
//
namespace App\Http\Controllers;

use App\Party;
use App\Sales_order;
use App\Stock;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    public function index()
    {
     $orders = Sales_order::all();
//      return $orders->foo;
      //return 'whay';
     return view('sales_order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parties = DB::table('parties')
            ->orderBy('name', 'asc')
            ->get();
        $stock= Stock::all();
        return view('sales_order.create', compact('parties','stock'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//have to add validation and sdd discount feature
      $so = Sales_order::create(['total'=>'0','sdate'=>Carbon::now(),'party_id'=>$request->input('pid')]);
       // return $so;

   $item =$request->input('jel_reference');
   $quantity =$request->input('jel_label');
   $disc =$request->input('jel_coa_id');
   $i =0; $j=0;
   $total = 0;
        foreach($disc as $it ) { $disc[$j] =  1 - ($disc[$j]/100) ; $j++; }
     foreach ($item as $it ){
         $stock = Stock::find($it);
         $rate = $stock->rate;
         //updating Quantity in stock
         $stock->quantity = $stock->quantity - $quantity[$i];
         $stock->save();
         // getting total for order
         $total=$total + $rate*$quantity[$i]*$disc[$i];
         // making relation
         $so->stock()->attach($it, ['quantity' => $quantity[$i],'discount' => $disc[$i]]);
         $i++;
     }
     $so->total = $total;
     $so->save();
     return redirect('/order');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Sales_order::findOrFail($id);
        if($order->ddate== null){
        $order->ddate = Carbon::now();
        $order->save();
        }
        return redirect('/order');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
