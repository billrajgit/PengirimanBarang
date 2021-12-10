     */
    public function index()
    {
        //
        // pages/admin/produk/list.blade.php
        return view("pages.admin.produk.list",[
            "produk" => Produk::all() // SELECT * FROM TBLKATEGORI
        ]);
    }

    /**
@@ -24,7 +27,7 @@ public function index()
     */
    public function create()
    {
        //
        return view("pages.admin.produk.form");
    }

    /**
@@ -35,7 +38,15 @@ public function create()
     */
    public function store(Request $request)
    {
        //
        // mass assignment
        Kategori::create($request->except("_token"));
        // INSERT INTO TBLPRODUK(NAMA) VALUES(NILAI)
        // Produk::create([
        //     "nama_produk" => $request->nama
        // ]);

        return redirect()->route("produk.index")
            ->with("info","Berhasil Tambah Produk");
    }

    /**
@@ -57,7 +68,7 @@ public function show(Kategori $kategori)
     */
    public function edit(Produk $produk)
    {
        //
        return view("pages.admin.produk.form",compact("produk"));
    }

    /**
@@ -69,7 +80,10 @@ public function edit(Produk $produk)
     */
    public function update(Request $request,Produk $produk)
    {
        //
        $produk->update($request->except("_token"));

        return redirect()->route("produk.index")
            ->with("info","Berhasil Rubah Produk");
    }

    /**
@@ -80,6 +94,9 @@ public function update(Request $request, Produk $produk)
     */
    public function destroy(Produk $produk)
    {
        //
        $produk->delete();

        return redirect()->route("produk.index")
            ->with("info","Berhasil Hapus Produk");
    }
}