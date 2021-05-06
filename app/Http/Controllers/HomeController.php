<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Product;
use App\Testimonial;
use DB;
use App\Category;
use App\Blog;
use App\Project;
use App\Comment;
use App\Team;
use App\Tour;
use App\Slide;
use App\ChooseUs;
use App\Service;
use App\Client;
use App\Destination;
use App\Gallery;
use App\Book;
use App\Geust;
use App\Travel_Type;
use App\Frequently;
use App\Price;
use App\Preference;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects=DB::table('projects')
        ->join('services','projects.service_id','=','services.id')
        ->select('projects.*','services.service_name')->get();
        $data=[
            'projects'=>$projects,
            'testimonials'=>$this->get_testimonail(5),
            'slides'=>$this->get_slide(5),
            'clients'=>$this->get_client(8),
            'services'=>$this->get_service(3),
            'blogs'=>$this->get_blog(5),
            "chooseUs"=>$this->get_choose_us(6),
            'teams'=>$this->get_team(3),
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact'),
        ];
        return view('frontend.index',$data);
    }
    public function get_open_hour(){
    }
    public function legal(){
        $data=[
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
        ];
        return view('frontend.legal',$data);
    }
    public function privacy(){
        $data=[
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
        ];
        return view('frontend.privacy',$data);
    }
    public function get_choose_us($number){
        $choos_us=ChooseUs::orderByDesc('id')->limit($number)->get();
        return $choos_us;
    }
    public function get_slide($number){
        $slide=Slide::orderByDesc('id')->limit($number)->get();
        return $slide;
    }
    public function get_product($number){
        $products=Product::orderByDesc('id')->limit($number)->get() ;
        return $products;
    }
    public function get_tour($number){
        $tour=Tour::orderByDesc('id')->limit($number)->get() ;
        return $tour;
    }
    public function get_testimonail($number){
        $testimonail=Testimonial::orderByDesc('id')->limit($number)->get() ;
        return $testimonail;
    }
    public function get_service($number){
        $services=Service::orderByDesc('id')->limit($number)->get() ;
        return $services;
    }
    public function get_frequently($number){
        $frequently=Frequently::orderByDesc('id')->limit($number)->get() ;
        return $frequently;
    }
    public function get_price($number){
        $price=Price::orderByDesc('id')->limit($number)->get() ;
        return $price;
    }
    public function get_blog($number){
        $blogs=DB::table('blogs')
                ->join('users','blogs.user_id','=','users.id')
                ->join('categories','blogs.category_id','=','categories.id')
                ->select('users.name','blogs.*','categories.category')
                ->limit($number)
                ->orderBy('id','desc')
                ->get();
        return $blogs;
    }
    public function get_client($number){
        $client=Client::orderByDesc('id')->limit($number)->get() ;
        return $client;
    }
    public function get_team($number){
        $team=Team::orderByDesc('id')->limit($number)->get() ;
        return $team;
    }
    public function get_destination($number){
        $destination=Destination::orderByDesc('id')->limit($number)->get() ;
        return $destination;
    }
    public function get_preference_by_type($number,$type){
        $preference=Preference::where('type',$type)->orderByDesc('id')->limit($number)->get() ;
        return $preference;
    }
    public function get_preference_by_key($key){
        $preference=Preference::where('key',$key)->first() ;
        return $preference;
    }
    public function about(){
       $data=[
           "clients"=>$this->get_client(5),
           'services'=>$this->get_service(6),
           'teams'=>$this->get_team(10),
           'testimonails'=>$this->get_testimonail(6),
           'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
       ];
        return view('frontend.about',$data);
    }
    public function booking(Request $request){
        $this->validate($request,
        [
            'title'=>'required',
            'country'=>'required',
            'passport'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required'
        ]
        );
        $fax="";
        $geust=new Geust();
        $geust->title=$request->title;
        $geust->country=$request->country;
        $geust->passport=$request->passport;
        $geust->first_name=$request->first_name;
        $geust->last_name=$request->last_name;
        $geust->phone=$request->phone;
        $geust->email=$request->email;
        if($request->fax!=null){
            $geust->fax=$request->fax;
        }
        $geust->address=$request->address;
        $geust->save();
        $book=new Book();
        $book->tour_id=$request->tour_id;
        $book->geust_id=$geust->id;
        $book->hotel=$request->hotel;
        $old_date=str_replace(' ', '', $request->travel_date);
        $old_date=strtotime($old_date);
        $new_date=date('Y-m-d',$old_date);
        $book->travel_date=$new_date;
        $book->save();
        return redirect()->route('thanks')->with('thank', 'Thank You for submited! We will contact to you soon!');
    }
    public function service(){
        $service=DB::table('services')->paginate(6);
        $data=[
            'clients'=>$this->get_client(8),
            "services"=>$service,
            "chooseUs"=>$this->get_choose_us(6),
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
        ];
        return view('frontend.service',$data);
    }
    public function service_detail($id){
        $data=[
            "services"=>Service::all(),
            "service"=>DB::table('services')->where('id',$id)->first(),
            
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
        ];
        return view('frontend.service_detail',$data);
    }
    public function team(){
        $team=Team::orderByDesc('id')->paginate(15);
        $data=[
            'clients'=>$this->get_client(8),
            'teams'=>$team,
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
        ];
        return view("frontend.team",$data);
    }
    public function team_detail($id){
        $team=Team::where('id',$id)->first();
        $data=[
            'clients'=>$this->get_client(8),
            'team'=>$team,
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
        ];
        return view("frontend.team_detail",$data);
    }
    protected function clean_date($date){
        $rpl_date=str_replace('',' ',$date);
        $time = strtotime($rpl_date);
        $newformat = date('d-m-Y',$time);
        return $newformat;
    }
    protected function get_between_date($start,$end){
            return date_diff(
                date_create($start),  
                date_create($end)
            )->format('%a');
    }
    function find_tour(Request $request){
        $this->validate($request,[
            'start_date'=>'required',
            'end_date'=>'required',
            'des_id'=>'required',
            'type_id'=>'required',
        ]);
        $data1=$this->clean_date($request->start_date);
        $data2=$this->clean_date($request->end_date);
        $amount_date=$this->get_between_date($data1,$data2);
        $tours=Tour::where('type_id',$request->type)
            ->OrWhere('des_id',$request->des_id)
            ->Orwhere('amount_day','=',$amount_date)    
        ->orderByDesc('id')
        ->paginate(12);
        $destinations=Destination::orderByDesc('id')->get();
        $travel_type=Travel_Type::orderByDesc('id')->get();
        $data=[
            'destinations'=>$destinations,
            'tours'=>$tours,
            'travel_type'=>$travel_type
        ];
        return view('frontend.tour',$data);
    }
    public function tour(){
        $travel_type=Travel_Type::orderByDesc('id')->get();
        $tours=Tour::orderByDesc('id')->paginate(15);
        $destinations=Destination::orderByDesc('id')->get();
        $data=[
            'destinations'=>$destinations,
            'tours'=>$tours,
            'travel_type'=>$travel_type
        ];
        return view('frontend.tour',$data);
    }
    public function tour_detail($id){
        $tour=Tour::where('id',$id)->with('gallery')->first();
        $destination=Destination::where('id',$tour->des_id)->first();
        $related_tour=Tour::where('type_id',$tour->type_id)->orderByDesc('id')->get();
        $data=[
            'tour'=>$tour,
            'destination'=>$destination,
            'related_tour'=>$related_tour
        ];
        return view('frontend.tour_detail',$data);
    }
    public function destination(){
        $destinations=Destination::orderByDesc('id')->paginate(15);
        return view('frontend.destination',['destinations'=>$destinations]);
    }
    public function destination_detail($id){
        $destinations=Destination::where('id',$id)->first();
        $tours=Tour::where('des_id',$destinations->id)->orderByDesc('id')->limit(10)->get();
        $recent_new=Destination::where('id','!=',$id)->orderByDesc('id')->limit(4)->get();
        $data=[
            'destinations'=>$destinations,
            'recent_new'=>$recent_new,
            'tours'=>$tours
        ];
        return view('frontend.destination_detail',$data);
    }
    public function latest_detail($id){
        $blogs=DB::table('blogs')
        ->join('users','blogs.user_id','=','users.id')
        ->join('categories','blogs.category_id','=','categories.id')
        ->where('blogs.id',$id)
        ->select('users.name','blogs.*','categories.category')
        ->first();
        $comment=Comment::where('status', '=', 1)
                ->where("blog_id", "=", $id)
                ->get();
        $related=Blog::where('category_id',$blogs->category_id)->where('id','!=',$id)->orderByDesc('id')->get();
        $t_comment = $comment->count();
        $categories=Category::all();
        $recent_new=Blog::where('id','!=',$id)->orderByDesc('id')->limit(4)->get();
        $data=[
            'clients'=>$this->get_client(8),
            'blogs'=>$blogs,
            'categories'=>$categories,
            'recent_new'=>$recent_new,
            'related'=>$related,
            'comment'=>$comment,
            't_comment'=>$t_comment,
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
        ];
        return view('frontend.blog_detail',$data);
    }
    public function latest_by_category($cat_id){
        $blogs=DB::table('blogs')
                ->join('users','blogs.user_id','=','users.id')
                ->join('categories','blogs.category_id','=','categories.id')
                ->select('users.name','blogs.*','categories.category')
                ->where('blogs.category_id',$cat_id)
                ->paginate(6);
        $categories=Category::all();
        $recent_new=Blog::orderByDesc('id')->limit(4)->get();
        $data=[
            'clients'=>$this->get_client(8),
            'blogs'=>$blogs,
            'categories'=>$categories, 
            'recent_new'=>$recent_new,
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
        ];
        return view('frontend.blog',$data);
    }
    public function latest(){
        $blogs=DB::table('blogs')
                ->join('users','blogs.user_id','=','users.id')
                ->join('categories','blogs.category_id','=','categories.id')
                ->select('users.name','blogs.*','categories.category')
                ->paginate(6);
        $categories=Category::all();
        $recent_new=Blog::orderByDesc('id')->limit(4)->get();
        $data=[
            'clients'=>$this->get_client(8),
            'blogs'=>$blogs,
            'categories'=>$categories,
            'recent_new'=>$recent_new,
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
        ];
        return view('frontend.blog',$data);
    }
    public function project(){
        $projects=DB::table('projects')
        ->join('services','projects.service_id','=','services.id')
        ->select('projects.*','services.service_name')->get();
        $data=[
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact'),
            'projects'=>$projects
        ];
        return view('frontend.project',$data);
    }
    public function project_detail($id){
        
        $project=DB::table('projects')
        ->where("projects.id",$id)
        ->join('services','projects.service_id','=','services.id')
        ->select('projects.*','services.service_name')->first();   
        $last_project = Project::orderBy('id', 'desc')->limit(6)->get();
        $data=[
            'projects'=>$project,
            'last_project'=>$last_project,
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact'),
        ];
        return view('frontend.project_detail',$data);
    }
    public function contact(){
        $data=[
            'clients'=>$this->get_client(8),
            'social'=>$this->get_preference_by_type(5,'social'),
            'about'=>$this->get_preference_by_type(10,'about'),
            'contact'=>$this->get_preference_by_type(5,'contact')
        ];
        return view('frontend.contact',$data);
    }
    public function product(){
        $product=Product::paginate(9);
        return view('frontend.product',['product'=>$product]);
    }
    public function product_detail($id){
        $product= Product::where("id", $id)->first();    
        $last_product = Product::orderBy('id', 'desc')->limit(6)->get();
        return view('frontend.product_detail',['product'=>$product, 'last_product'=>$last_product]);
    }
}
