<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Categories<b></b>
            <b style="float:right;">
            <span class="badge badge-danger"> </span>
            </b>
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table caption-top">
                    <thead>
                        <tr>
                            <th scope="col">User No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <!-- change the format of create at with forHumman function -->
                            <td></td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
