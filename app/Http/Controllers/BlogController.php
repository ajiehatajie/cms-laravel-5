<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\Category;
use App\PostHit;
use Carbon\Carbon;
Use Session;

use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;

class BlogController extends Controller
{
    //

    public function index()
    {
        \VisitLog::save();
        return view('promo.index');
    }

    public function  getLang($lang='en')
   {
       Session::put('lang', $lang);
       app()->setLocale(Session::get('lang'));
       return  \Redirect::back();

   }
    public function blog()
    {
        \VisitLog::save();
        $series=Category::orderBy('title','asc')->get();
        $posts=Article::published()->paginate(10);



        return view('promo.blog',compact('series','posts'));

    }

    public function blogDetail(Post $post)
    {
      #$post =
      $post->CreatePostView()->attach($post->id);
      $posthit=PostHit::where('post_id','=',$post->id)->latest()->get();
      #$postlast=PostHit::findOrfail($post->id)->latest()->limit(1)->get();

      #dd($posthit);
      \VisitLog::save();
      return view('promo.blog-detail',compact('post','posthit'));

    }

    public function Tag(Tag $tag)
    {
        \VisitLog::save();
      $post=$tag->PostArticle()->get();

      #dd($);
      return view('blog.blog-bytag',compact('post'));

    }

    public function Series(Series $series)
    {
        \VisitLog::save();
        #dd($series);
        #$filter=$series->load('article')->where('published_at','<=',Carbon::now())->get();
        $filter=$series;
        #dd($filter);
        return view('blog.blog-byseries',compact('filter'));
    }

    public function contact()
    {
        \VisitLog::save();
        return view('promo.contact');
    }


    public function callme(Request $request )
    {

          $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required'

        ]);

        $requestData = $request->all();
        $data_toview = array();



        dd($request);

    }

    public function postcontact(Request $request)
    {

    }
    public function QuickContact(Request $request )
    {

      $this->validate($request, [
          'wemail'=>'required|email',
          'wmessage'=>'required',

      ]);

      $requestData = $request->all();
      $data_toview = array();

      $email_admin ="hatajie@gmail.com";
      $data_toview['email']=$requestData['wemail'];
      $data_toview['wmessage']=$requestData['wmessage'];

      $email_sender   = 'iyoidev@gmail.com';
      $email_pass     = 'xxx';
      $email_to       = $email_admin;

          // Backup your default mailer
      $backup = \Mail::getSwiftMailer();

      try{

                      //https://accounts.google.com/DisplayUnlockCaptcha
                      // Setup your gmail mailer
                      $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls');
                      $transport->setUsername($email_sender);
                      $transport->setPassword($email_pass);
                      $transport->setStreamOptions(array('ssl' => array('allow_self_signed' => true, 'verify_peer' => false)));

                      // Any other mailer configuration stuff needed...
                      $gmail = new Swift_Mailer($transport);

                      // Set the mailer as gmail
                      \Mail::setSwiftMailer($gmail);

                      $data['emailto'] = $email_to;
                      $data['sender'] = $email_sender;
                      //Sender dan Reply harus sama

                      Mail::send('email.quickcontact', $data_toview, function($message) use ($data)
                      {

                          $message->from($data['sender'], 'donotreply');
                          $message->to($data['emailto'])
                          ->replyTo($data['sender'], 'donotreply')
                          ->subject("QuickContact");

                          #echo 'The mail has been sent successfully';
                          redirect()->route('home');
                          #return redirect('home')->with('status', 'Profile updated!');

                      });

          }catch(\Swift_TransportException $e)
          {
              $response = $e->getMessage() ;
              echo $response;
          }


          // Restore your original mailer
          Mail::setSwiftMailer($backup);


       }


       public function calonmitra()
       {
           \VisitLog::save();
           return view('promo.calonmitra');
       }

       public function videopaytren()
       {
           \VisitLog::save();
           return view('promo.videopaytren');
       }
       public function faq()
       {
           \VisitLog::save();
           return view('promo.faq');
       }

}
