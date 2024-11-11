namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Other existing methods...

    public function tambah_data(Request $request)
    {
        // Your logic to handle the request goes here.
        // For example, to create a new supplier:
        $supplier = new Supplier;
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        // Add other fields as necessary...

        $supplier->save();

        return redirect()->route('suppliers.index')->with('success', 'Supplier added successfully!');
    }
}
