     */
    public function index()
    {
        //
        // pages/admin/kategori/list.blade.php
        return view("pages.admin.kategori.list",[
            "kategori" => Kategori::all() // SELECT * FROM TBLKATEGORI
        ]);
    }

    /**
@@ -24,7 +27,7 @@ public function index()
     */
    public function create()
    {
        //
        return view("pages.admin.kategori.form");
    }

    /**
@@ -35,7 +38,15 @@ public function create()
     */
    public function store(Request $request)
    {
        //
        // mass assignment
        Kategori::create($request->except("_token"));
        // INSERT INTO TBLKATEGORI(NAMA) VALUES(NILAI)
        // Kategori::create([
        //     "nama_kategori" => $request->nama
        // ]);

        return redirect()->route("kategori.index")
            ->with("info","Berhasil Tambah Kategori");
    }

    /**
@@ -57,7 +68,7 @@ public function show(Kategori $kategori)
     */
    public function edit(Kategori $kategori)
    {
        //
        return view("pages.admin.kategori.form",compact("kategori"));
    }

    /**
@@ -69,7 +80,10 @@ public function edit(Kategori $kategori)
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
        $kategori->update($request->except("_token"));

        return redirect()->route("kategori.index")
            ->with("info","Berhasil Rubah Kategori");
    }

    /**
@@ -80,6 +94,9 @@ public function update(Request $request, Kategori $kategori)
     */
    public function destroy(Kategori $kategori)
    {
        //
        $kategori->delete();

        return redirect()->route("kategori.index")
            ->with("info","Berhasil Hapus Kategori");
    }
}