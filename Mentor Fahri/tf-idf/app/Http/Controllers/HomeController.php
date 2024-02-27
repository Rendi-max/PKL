<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\BeritaModel;
use App\Models\Index;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = BeritaModel::all();
        return view('home', compact('berita'));
    }

    private function _preprocessing($text){
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();

        $stopWordRemoverFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
        $stopword = $stopWordRemoverFactory->createStopWordRemover();

        $text = strtolower($text);
        $text = $stemmer->stem($text);

        $text = $stopword->remove($text);

        return $text;
    }

    public function pembobotanIndex(Request $request){
        $jumlahDokumen = BeritaModel::all();
        $tfid = $this->_tfIdf($request->search);

         return redirect("/");
    }

    private function _tfIdf($keyword)
    {
        $berita = BeritaModel::all();
        Index::truncate();

        $keywordNormalize = $this->_preprocessing($keyword);
        foreach ($berita as $beritaValue) {
            $beritaNormalize = $this->_preprocessing($beritaValue->berita);
            $stem = explode(" ", trim($beritaNormalize));
            foreach ($stem as $key => $term) {
                if ($term != "") {

                    $resCount = Index::where('term', $term)->where('berita_id', $beritaValue->id)->first();

                    if ($resCount != null) {
                        $count = $resCount->jumlah;
                        $count++;

                        Index::where('term', $term)->where('berita_id', $beritaValue->id)->update([
                            'jumlah' => $count,
                        ]);
                    }
                    else {
                        Index::insert([
                            'term' => $term,
                            'berita_id' => $beritaValue->id,
                            'jumlah' => 1,
                        ]);
                    }
                    //jika belum ada, langsung simpan ke tbindex
                } //end if
            } //end foreach
        }
        $bobot = $this->_hitungBobot();
    }

    private function _hitungBobot()
    {
        $n = Index::select(DB::raw('DISTINCT berita_id'))->count();

        $index = Index::all();

        foreach ($index as $indexValue) {
            $term = $indexValue->term;
            $tf = $indexValue->jumlah;
            $id = $indexValue->id;

            $NTerm = Index::where('term', $term)->count();

            $w = $tf * log($n / $NTerm);

            $resUpdateBobot = Index::where('id', $id)->update([
                'bobot' => $w,
            ]);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
