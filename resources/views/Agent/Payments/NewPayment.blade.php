@extends('Agent.Layout.App3')
@section('title', 'Case')

@section('content')

<div class="vb__layout__content" id="app">
  <div class="vb__breadcrumbs">
<div class="vb__breadcrumbs__path">
<a href="javascript: void(0);">Home</a>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<span>Finance</span>
</span>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<strong class="vb__breadcrumbs__current">Add Payment</strong>
</span>
</div>
</div>
  <div class="vb__utils__content">
    <div class="air__utils__heading">
</div>









<!-- START: forms/basic-forms-elements -->


          <!-- Vertical Form -->


            <div class="card">
            <div class="card-body">
            <h4 class="mb-4">
            <strong>Add Payment</strong>
            </h4>

    <form method="post" action="/payments/add/action"  />
    @csrf
                <div class="row col-12">
                  <div class="form-group col-md-3">
                                <label for="milestone-table-Total " class="form-field__label">Total 100%</label>
                                <input id="milestone-table-Total " type="text" name="total" value="@{{ total }}" class="form-control"
                                       placeholder="Total" disabled />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="milestone-1" class="form-field__label">Program Type</label>
                                <select id="milestone-1" v-model="choice" v-on:change="select()" name="type" class="form-control">
                                    <option value="fixed">Fixed Price</option>
                                    <option value="hourly">Hourly</option>
                                    <option value="items">Items</option>
                                </select>

                            </div>

                    <span v-if="choice == 'hourly'" class="col-lg-6 row">
                      <div class="form-group col-md-6">
                                <label for="milestone-2" class="form-field__label">Hour Price</label>
                                <input id="milestone-2" v-model="h_price"  v-on:keyup="calculate()" name="h_price" type="number" class="form-control"
                                       placeholder="Hour Price" required/>
                        </div>

                        <div class="form-group col-md-6">
                                <label for="milestone-3" class="form-field__label">No. of Hours</label>
                                <input id="milestone-3" v-model="n_hours"  v-on:keyup="calculate()" name="n_hours" type="number" class="form-control"
                                       placeholder="No. of Hours" required/>
                            </div>

                    </span>
                    <span v-if="choice == 'fixed'" class="col-lg-3">
                      <div class="form-group">
                                <label for="milestone-2" class="form-field__label"> Price</label>
                                <input id="milestone-2" v-model="f_price"  v-on:keyup="calculate()" name="f_price" type="number" class="form-control"
                                       placeholder="Price" required/>
                            </div>


                    </span>
                      <div v-if="choice == 'items'" class="form-group col-lg-3">

                        <label  class="">Items</label>

                      <select  id="items" name="items[]" onchange="calculate()" onclick="calculate()"   v-model="items" class="form-control select2 " multiple  required>
                          <option  value="" >Select items</option>

                         @foreach($user->items as $item)

                              <option   value="{{$item->id}}/{{$item->price}}" >{{$item->getFieldByName('name')->value}}</option>

                          @endforeach


                     </select>



                          </div>

                    <div class="form-group col-md-3">

                                <label for="milestone-4" class="form-field__label">Select Milestone Type</label>
                                <select id="milestone-4" name="designed_milestone" @change="onChange()" class="form-control" v-model="designed_milestone" name="designed_milesone">
                                    <option value="cash">cash</option>
                                @foreach($designed_milestones as $milestone)
                                        <option value="{{$milestone->id}}">{{$milestone->name}}</option>
                                    @endforeach
                                </select>


                    </div>

                    <div class="form-group col-md-3">

                      <label  class="">Account</label>

                     <select id="contact-7" name="account_id" class="form-control select2" required>
    <option  value="" >Select Account Name</option>

                        @foreach($accounts as $account)

                             <option value="{{$account->id}}" >{{$account->getFieldByName('surname')['value']}}</option>

                         @endforeach



                    </select>


                    </div>

                </div>


        <div class="row m-0" >
            <div class="col px-2">
                <!-- Table Section Start -->
                <div class="admin-table add-milestone-table">
                    <div class="row admin-table-body">
                        <div class="col">
                            <div class="table-responsive table-checkbox">
                                                                                                            <span v-show="designed_milestone != 'cash'">

                                <table class="table table-sm">
                                    <thead>
                                    <tr>

                                        <th scope="col">Payment %</th>
                                        <th scope="col">Payment Amount</th>
                                        <th scope="col">Description</th>

                                        <th scope="col">Payment Method</th>

                                        <th scope="col">Payment Due Date</th>
                                    </tr>
                                    </thead>
                                    <tbody class="height-300">
                                    <tr v-for="(index,milestone) in selected_data.milestones ">

                                        <td>
                                          <div class="form-group ">

                                                    <label for="payment-@{{milestone.id }}" class="form-field__label">Payment</label>
                                                    <input id="paymenet-@{{milestone.id }}" value="@{{ milestone.percent }} %"  type="text" class="form-control"
                                                           placeholder="Payment" disabled />
                                            </div>
                                        </td>
                                        <td>
                                          <div class="form-group">

                                                    <label for="amount-@{{milestone.id }}" class="form-field__label">Payment Amount</label>
                                                    <input id="amount-@{{milestone.id }}" value="@{{ milestone.percent/100 *total }} " name="amount@{{ index }}" type="text" class="form-control"
                                                           placeholder="Payment Amount" readonly />
                                                </div>
                                        </td>
                                        <td>
                                          <div class="form-group">

                                                    <label for="description-@{{milestone.id }}" class="form-field__label">Description</label>
                                                    <input id="description-@{{milestone.id }}" value=" " name="description@{{ index }}" type="text" class="form-control"
                                                           placeholder="Description"  />
                                                </div>
                                        </td>
                                        <td>
                                          <div class="form-group">

                                                    <label for="method-@{{milestone.id }}" class="form-field__label">Payment Method</label>
                                                    <select  name="method@{{ index }}"  class="form-control">
                                                      <option value="cash">Cash</option>
                                                      <option value="visa">Visa</option>
                                                      <option value="mastercard">Mastercard</option>

                                                    </select>

                                                </div>
                                        </td>

                                        <td>
                                          <div class="form-group ">
                                                    <label for="date@{{milestone.id }}" class="form-field__label">Payment Due Date</label>
                                                    <input id="date@{{milestone.id }}"  name="date@{{ index }}" type="date" class="form-control"
                                                            />

                                                </div>
                                        </td>
                                    </tr>


                                    </tbody>
                                     </span>

                                    <tfoot>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                          <div class="form-group">
                                                        <label for="milestone-table-Total " class="form-field__label">Total %</label>
                                                        <input id="milestone-table-Total " type="text" name="total" value="@{{ total }}" class="form-control"
                                                               placeholder="Total" />
                                                    </div>

                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table Section End -->
        </div>
      </div>

        </div>









            <div class="form-actions">
              <button type="submit" class="btn btn-success px-5">Submit</button>
              <button type="button" class="btn btn-default px-5">Cancel</button>
            </div>
          </form>
          <!-- End Vertical Form -->
        </div>
      </div>
    </div>




  </div>
</section>

<!-- END: forms/basic-forms-elements -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>


<script>

function calculate(){
  $('#items').on("change",function(){
    app.items = $(this).val();
    app.calculate();
});
}

    const app = new Vue({
        el: '#app',

        data() {
            return {
                designed_milestones:{!!json_encode($designed_milestones)!!},
                choice:'fixed' ,
                designed_milestone:'cash',
                selected_data:{},
                f_price:0,
                i_price:0,
                n_items:0,
                h_price:0,
                n_hours:0,
                total:0,
                items:[]
            }
        },

        created() {
            // console.log(JSON.stringify(this.leads[0]))
            // window.alert = function() {};

            $(document).ready(function () {

                $('.points').on('focus', function () {
                    // Store the current value on focus and on change
                    previous = $('option:selected', this).attr('points');
                }).change(function () {
                    // app.points =app.points+ 1;
                    app.points -= parseInt(previous);

                    var points = $('option:selected', this).attr('points');
                    previous = points;

                    $(this).attr('previous', points);
                    app.points += parseInt(points);

                })
            })

        },

        methods: {
            onChange(){
                this.selected_data = this.designed_milestones.find(obj=>obj.id == this.designed_milestone)
                console.log(this.selected_data)
            },
            calculate(){
              console.log('kkk')
                if(this.choice == 'fixed'){
                    this.total = this.f_price;
                }
                else if(this.choice == 'items'){
                    // this.total = this.i_price * this.n_items;
                    this.total = 0;
                    this.items.map((value,i)=>{
                      this.total += parseFloat(value.split('/')[1])

                    })

                    console.log(this.total);
                }
                else if(this.choice == 'hourly'){
                    this.total = this.h_price * this.n_hours;
                }
            },

            addMessage() {
                this.points++;
            },
            select(){
              $('.select2').select2()

            },

            sendMessage() {
                this.addMessage(this.newMessage);
                this.newMessage = '';
            }
        }
    });



</script>




@endsection
