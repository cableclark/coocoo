<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Comment;
class CommentForm extends Component
{
    public $coocooid;
    public $message;
    public $comments;
    protected $listeners = ['commentRemoved' => 'remove'];

    public function mount ($coocooid) {
        $this->$coocooid = $coocooid;
        $this->comments = Comment::where("coocoo", $this->coocooid)->get();
    }
    public function save() {
        $ceatedComment = Comment::create(
            ["coocoo"=>$this->coocooid,
             "author"=> auth()->user()->id,
             "comment"=>$this->message]
         );
         $this->comments= $this->comments->push($ceatedComment);
         $this->message = "";
    }
    public function remove ($id) {
        $comment = Comment::find($id);
        if (auth()->user()->id === $comment->author) {
            $comment->delete();
            $this->comments = $this->comments->filter(function ($item) use ($id) {
                return $item->id != $id;
                });
            }
        }

    public function render ()
        {
            return view('livewire.comment-form');
        }
}
