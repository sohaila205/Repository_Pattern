<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\RepositoryInterface\UserRepositoryInterface;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $user = $this->userRepository->all();
       // dd($user);

        return view('user.index',compact('user'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function create()
    {
        //

        return view('user.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        
      //  return $request;

        $this->validate($request,[
            'name'=>'required|Max:255',
            'email'=>'required|unique:users|Max:255',
            'password'=>'required|Max:255',

        ]);
        

        $this->userRepository->create($request->all());
                return redirect()->route('user.index')->with('success', __('messages.Added'));
            }
            

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */


    public function edit($id)
    {
                $user=$this->userRepository->getUser($id);
                return view('user.edit',compact('user'));      

        }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|Max:255',
            'email'=>'required|Max:255',
            'password'=>'required|Max:255',

        ]);

       
        $request =$request->except("_token");
            $user=$this->userRepository->edit($id,$request);
            return redirect()->route('user.index')->with('success',__('messages.Updated'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */


    public function delete($id)
    {
                $user=$this->userRepository->delete($id);
                return redirect()->route('user.index')->with('success', __('messages.Deleted'));
           

    }
}
