
<?php
//TAG REQUEST



namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class  CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
        ];
    }
}




//Building Controller


    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function saveTags( string $tags ){

        // GET LIST TAGS TO ASSOSIATE AT AN ARTICLE

        $tags = array_filter( array_unique( array_map(function ($item){

            return sluggify( $item );
        }, explode('|', $tags))), function ( $item ){
            return !empty( $item );
        } );

        /*

        WE DELETE THIS BECAUSE OF REMPLACE IT WITH

        Tag::where('post_count', 0)->delete(  );

        if( empty( $tags ) ){

            return false;
        }

        */

        // GET TAGS HOO ARE IN THE DATABASE

        $persisted_tags = Tag::whereIn('name', $tags)->get();

        // GET THE NEW TAGS AND INSERT THEM IN THE DB 



        // FIND THE TAGS HO ARE UTILILISED AND  NOT MORE



        // FIND NEW TAGS ASSOCIATED



        $tags_to_create = array_diff( $tags, $persisted_tags->pluck('name')->all() );

        $tags_to_create = array_map(function ( $tag ){
            return ['name' => sluggify($tag), 'building_count' => 1];

        }, $tags_to_create );

        $created_tags = $this->tags()->createMany( $tags_to_create );

        $persisted_tags = $persisted_tags->merge(  $created_tags );

        $edits = $this->tags->sync( $persisted_tags );

        Tag::wereIn('id', $edits['attached'])->increment('building_count', 1);

        Tag::wereIn('id', $edits['dettached'])->decrement('building_count', 1);

        Tag::where('building_count', 0)->delete();

    }
