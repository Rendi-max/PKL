<?php 

    namespace App\Repository\Implements;

use App\Helper\CreateLog;
use App\Models\Link;
use Illuminate\Support\Str;
use App\Models\TextNotAllowed;
use App\Repository\Task\TaskRepository;
    use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

    class LinkRepository implements TaskRepository
    {
        public function createTask(Request $request){
            $checkShortLink = Link::whereRaw('BINARY short_link = ?', [$request->short_link])->first();
            $checkBanedWords = TextNotAllowed::pluck('text');
            $check = Str::contains($request->short_link, $checkBanedWords);
            if ($check == false) 
            {
                if ($checkShortLink == null) {
                    $link = new Link;
                    $link->user_id    = Auth::id(); 
                    $link->short_link = ($request->short_link == null) ? Str::random(random_int(5, 8)) : $request->short_link;
                    $link->original_link = $request->original_link;
                    $link->password   = ($request->password != null || $request->password != '') ? base64_encode($request->password) : null;
                    $link->expired_at = ($request->expired_at != null) ? $request->expired_at : null;
                    $link->save();
                    CreateLog::createLogActivity("Created a short link for ".$request->original_link);
                    return;
                }
                return "Short link already exist!";
            }
            else
            {
                return "Short link contains bad words !!";
            }
        }
        public function updateTask(Request $request, string $id){
            $checkShortLink = Link::where('id', '!=', $id)->whereRaw('BINARY short_link = ?', [$request->short_link])->first();
            $checkBanedWords = TextNotAllowed::pluck('text');
            $check = Str::contains($request->short_link, $checkBanedWords);
            if ($check == false) 
            {
                if ($checkShortLink == null ) {
                    $link = Link::find($id);
                    $link->user_id    = Auth::id(); 
                    $link->short_link = ($request->short_link == null) ? Str::random(random_int(5, 8)) : $request->short_link;
                    $link->original_link = $request->original_link;
                    $link->password   = ($request->password != null || $request->password != '') ? base64_encode($request->password) : null ;
                    $link->expired_at = ($request->expired_at != null) ? $request->expired_at : null;
                    $link->save();
                    CreateLog::createLogActivity("Updated a short link ".url('/l=').$link->short_link);
                    return;
                }
                else
                {
                    return "Short link already exist!";
                }
                
            }
            else
            {
                return "Short link contains bad words !!";
            }
        }
        public function deleteTask(string $id){
            $link = Link::find($id);
            $link->delete();
            return;
        }
    }