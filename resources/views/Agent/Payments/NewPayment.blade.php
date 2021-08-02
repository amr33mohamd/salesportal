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
                                <label for="milestone-table-Total " class="form-field__label">Invoice #</label>
                                <input id="milestone-table-Total " type="text" name="code" value="@{{code}}" class="form-control"
                                       placeholder="Total" disabled />
                            </div>
                            <div class="form-group col-md-3">
                                          <label for="milestone-table-Total " class="form-field__label">Invoice Date </label>
                                          <input id="milestone-table-Total " type="date" name="date" value="" class="form-control"
                                                 placeholder="date"  />
                                      </div>
                                      <div class="form-group col-md-3">
                                                    <label for="milestone-table-Total " class="form-field__label">Remind Client a day </label>
                                                    <input id="milestone-table-Total " type="number" name="date" value="" class="form-control"
                                                           placeholder="numbers"  />
                                                </div>
                                                <div class="form-group col-md-3">
                                                              <label for="milestone-table-Total " class="form-field__label">follow up every day </label>
                                                              <input id="milestone-table-Total " type="number" name="date" value="" class="form-control"
                                                                     placeholder="days"  />
                                                          </div>
                                      <div class="form-group col-md-3">
                                          <label for="milestone-1" class="form-field__label">Currency</label>
                                          <select id="milestone-1"  v name="currency" class="form-control">
                                              <option value="USD">USD</option>
                                              <option value="AED">AED</option>
                                              <option value="CAD">CAD</option>
                                              <option value="GBP">GBP</option>
                                              <option value="AUD">AUD</option>
                                              <option value="EUR">EUR</option>
                                              <option value="INR">INR</option>
                                              <option value="CNY">CNY</option>

                                          </select>

                                      </div>
                                      <div class="form-group col-md-3">
                                                    <label for="milestone-table-Total " class="form-field__label">Due Date </label>
                                                    <input id="milestone-table-Total " type="date" name="due_date"  class="form-control"
                                                           placeholder="date"  />
                                                </div>
                            <!-- <div class="form-group col-md-3">
                                <label for="milestone-1" class="form-field__label">Program Type</label>
                                <select id="milestone-1" v-model="choice" v-on:change="select()" name="type" class="form-control">
                                    <option value="fixed">Fixed Price</option>
                                    <option value="hourly">Hourly</option>
                                    <option value="items">Items</option>
                                </select>

                            </div> -->

                    <!-- <span v-if="choice == 'hourly'" class="col-lg-6 row">
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

                    </span> -->
                    <!-- <span v-if="choice == 'fixed'" class="col-lg-3">
                      <div class="form-group">
                                <label for="milestone-2" class="form-field__label"> Price</label>
                                <input id="milestone-2" v-model="f_price"  v-on:keyup="calculate()" name="f_price" type="number" class="form-control"
                                       placeholder="Price" required/>
                            </div>


                    </span> -->
                      <!-- <div v-if="choice == 'items'" class="form-group col-lg-3">

                        <label  class="">Items</label>

                      <select  id="items" name="items[]" onchange="calculate()" onclick="calculate()"   v-model="items" class="form-control select2 " multiple  required>
                          <option  value="" >Select items</option>

                         @foreach($user->items as $item)

                              <option   value="{{$item->id}}/{{$item->price}}" >{{$item->getFieldByName('name')->value}}</option>

                          @endforeach


                     </select>



                          </div> -->

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
                    <div class="form-group col-md-3">
                      <label  class="">Sales Person</label>

                     <select id="contact-7" name="account_id" class="form-control select2" required>
    <option  value="" >Sales Person</option>

                        @foreach($user->employees as $account)

                             <option value="{{$account->id}}" >{{$account->email}}</option>

                         @endforeach



                    </select>


                    </div>

                </div>





        <div class="row m-0" >
            <div class="col px-2">







                <!-- Table Section Start -->
                <div class="admin-table add-milestone-table col-12">
                    <div class="row admin-table-body">
                        <div class="col">
                            <div class="table-responsive table-checkbox">
                                <h4 class="mb-4">
                                <strong>Items</strong>
                                </h4>
                                <table class="table table-sm">
                                    <thead>
                                    <tr>

                                        <th scope="col">Item </th>
                                        <th scope="col">Rate</th>


                                        <th scope="col">Amount</th>
                                        <th scope="col">Description</th>

                                        <th scope="col">Remove</th>

                                    </tr>
                                    </thead>
                                    <tbody >
                                    <tr v-for="(index,item) in selected_items " style="height:50px">

                                      <td>
                                        <div class="form-group">

                                                  <label for="item-@{{index }}" class="form-field__label">Items</label>
                                                  <select   name="item-@{{ index }}"   class="form-control itemsItem">
                                                    <option value="">select item</option>
                                                    @foreach($user->items as $item)
                                                      <option value="{{$item->id}}">{{$item->getFieldByName('name')->value}}</option>
                                                    @endforeach

                                                  </select>
                                              </div>
                                      </td>

                                        <td>
                                          <div class="form-group" >

                                                    <label for="itemsRate-@{{index }}" class="form-field__label">Rate</label>
                                                    <input id="itemsRate-@{{index }}" value=" "  type="text" class="form-control"
                                                           placeholder="Rate" readonly />
                                                </div>
                                        </td>
                                        <td style="display:none">
                                          <div class="form-group"  >

                                                    <label for="itemsTax-@{{index }}" class="form-field__label">Tax %</label>
                                                    <input id="itemsTax-@{{index }}" name="itemsTax-@{{index }}" value="0"  type="number" class="form-control itemsTax"
                                                           placeholder="tax"  />
                                               </div>
                                        </td>
                                        <td>
                                          <div class="form-group">

                                                    <label for="itemsAmount-@{{index }}" class="form-field__label">amount</label>
                                                    <input id="itemsAmount-@{{index }}" name="itemsAmount-@{{index }}" value="0"  type="text" class="form-control"
                                                           placeholder="amount" readonly />


                                                </div>
                                        </td>
                                        <td>
                                          <div class="form-group">

                                                    <label for="itemsDescription-@{{index }}" class="form-field__label">description</label>
                                                    <input id="itemsDescription-@{{index }}" name="itemsDescription-@{{index }}" value=""  type="text" class="form-control"
                                                           placeholder="Description"  />


                                                </div>
                                        </td>
                                        <td>
                                          <div class="form-group">

                                                    <label for="itemsDelete-@{{index }}" class="form-field__label">remove</label><br>
                                                    <button v-on:click="delete_item(index)" name="itemsDelete-@{{index }}" type="button" class="btn btn-danger" >X</button>


                                                </div>
                                        </td>


                                    </tr>


                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                          <div class="form-group pull-right">
                                                        <button class="btn btn-success" type="button" v-on:click="add_item" >add item</button>
                                                    </div>

                                            </div>
                                        </td>


                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                      </div>


            <!-- Table Section End -->




          <!-- Table Section Start -->
          <div class="admin-table add-milestone-table col-12">
              <div class="row admin-table-body">
                  <div class="col">
                      <div class="table-responsive table-checkbox">
                          <h4 class="mb-4">
                          <strong>Time Entries</strong>
                          </h4>
                          <table class="table table-sm">
                              <thead>
                              <tr>

                                  <th scope="col">Date </th>
                                  <th scope="col">Activity</th>

                                  <th scope="col">Description</th>

                                  <th scope="col">Rate</th>
                                  <th scope="col">Hours</th>
                                  <th scope="col">Total</th>
                                  <th scope="col">Delete</th>

                              </tr>
                              </thead>
                              <tbody >
                              <tr v-for="(index,item) in selected_times " style="height:50px">

                                <td>
                                  <div class="form-group">

                                    <label for="timesDate-@{{index }}" class="form-field__label">Date</label>
                                    <input id="timesDate-@{{index }}" name="timesDate-@{{index }}" value=" "  type="date" class="form-control"
                                           placeholder="Date"  />
                                        </div>
                                </td>
                                <td>
                                  <div class="form-group">

                                            <label for="timesActivity-@{{index }}" class="form-field__label">Activity</label>
                                            <input id="timesActivity-@{{index }}" name="timesActivity-@{{index }}" value=" "  type="text" class="form-control"
                                                   placeholder="Activity"  />
                                        </div>
                                </td>
                                <td>
                                  <div class="form-group">

                                            <label for="timesDescription-@{{index }}" class="form-field__label">Description</label>
                                            <input id="timesDescription-@{{index }}" name="timesDescription-@{{index }}" value=" "  type="text" class="form-control"
                                                   placeholder="Description"  />
                                        </div>
                                </td>
                                  <td>
                                    <div class="form-group">

                                              <label for="timesRate-@{{index }}" class="form-field__label">Rate</label>
                                              <input id="timesRate-@{{index }}" name="timesRate-@{{index }}"  value="0"  type="number" class="form-control times"
                                                     placeholder="Rate"  />
                                          </div>
                                  </td>
                                  <td>
                                    <div class="form-group">

                                              <label for="timesHours-@{{index }}" class="form-field__label">Hours </label>
                                              <input id="timesHours-@{{index }}" name="timesHours-@{{index }}" value="0"  type="number" class="form-control times"
                                                     placeholder="Hours"  />
                                         </div>
                                  </td>
                                  <td>
                                    <div class="form-group">

                                              <label for="timesTotal-@{{index }}" class="form-field__label">Total </label>
                                              <input id="timesTotal-@{{index }}" name="timesTotal-@{{index }}" value="0"  type="number" class="form-control"
                                                     placeholder="total" readonly />
                                         </div>
                                  </td>
                                  <td>
                                    <div class="form-group">

                                              <label for="itemsDelete-@{{index }}" class="form-field__label">remove</label><br>
                                              <button v-on:click="delete_time(index)" name="itemsDelete-@{{index }}" type="button" class="btn btn-danger" >X</button>


                                          </div>
                                  </td>


                              </tr>


                              </tbody>

                              <tfoot>
                              <tr>
                                  <td>

                                  </td>
                                  <td>

                                  </td>
                                  <td>

                                  </td>
                                  <td>

                                  </td>
                                  <td>

                                  </td>
                                  <td>

                                  </td>
                                  <td>
                                    <div class="form-group pull-right">
                                                  <button type="button" v-on:click="add_time" class="btn btn-success" >add item</button>
                                              </div>


                                  </td>


                              </tr>
                              </tfoot>
                          </table>
                      </div>
                  </div>
                </div>


        <!-- Table Section End -->


        <!-- Table Section Start -->
        <div class="admin-table add-milestone-table col-12">
            <div class="row admin-table-body">
                <div class="col">
                    <div class="table-responsive table-checkbox">
                        <h4 class="mb-4">
                        <strong>Expense Entries</strong>
                        </h4>
                        <table class="table table-sm">
                            <thead>
                            <tr>

                                <th scope="col">Date </th>
                                <th scope="col">Expense</th>

                                <th scope="col">Description</th>

                                <th scope="col">Cost</th>
                                <th scope="col">QTY</th>
                                <th scope="col">Total</th>
                                <th scope="col">Delete</th>

                            </tr>
                            </thead>
                            <tbody >
                            <tr v-for="(index,item) in selected_expenses " style="height:50px">

                              <td>
                                <div class="form-group">

                                  <label for="exponsesDate-@{{index }}" class="form-field__label">Date</label>
                                  <input id="exponsesDate-@{{index }}" name="exponseDate-@{{index }}" value=" "  type="date" class="form-control"
                                         placeholder="Date"  />
                                      </div>
                              </td>
                              <td>
                                <div class="form-group">

                                          <label for="expensesEspense-@{{index }}" class="form-field__label">Expense</label>
                                          <input id="expensesEspense-@{{index }}" name="expensesEspense-@{{index }}" value=" "  type="text" class="form-control"
                                                 placeholder="Expense"  />
                                      </div>
                              </td>
                              <td>
                                <div class="form-group">

                                          <label for="expensesDescription-@{{index }}" class="form-field__label">Description</label>
                                          <input id="expensesDescription-@{{index }}" name="expensesDescription-@{{index }}" value=" "  type="text" class="form-control"
                                                 placeholder="Description"  />
                                      </div>
                              </td>
                                <td>
                                  <div class="form-group">

                                            <label for="expensesCost-@{{index }}" class="form-field__label">Cost</label>
                                            <input id="expensesCost-@{{index }}" name="expensesCost-@{{index }}" value="0"  type="number" class="form-control expenses"
                                                   placeholder="Cost"  />
                                        </div>
                                </td>
                                <td>
                                  <div class="form-group">

                                            <label for="expensesQty-@{{index }}" class="form-field__label">QTY </label>
                                            <input id="expensesQty-@{{index }}" name="expensesQty-@{{index }}" value="0"  type="number" class="form-control expenses"
                                                   placeholder="basis"  />
                                       </div>
                                </td>
                                <td>
                                  <div class="form-group">

                                            <label for="expensesTotal-@{{index }}" class="form-field__label">Total </label>
                                            <input id="expensesTotal-@{{index }}" name="expensesTotal-@{{index }}" value="0"  type="number" class="form-control"
                                                   placeholder="total" readonly />
                                       </div>
                                </td>
                                <td>
                                  <div class="form-group">

                                            <label for="expensesDelete-@{{index }}" class="form-field__label">remove</label><br>
                                            <button v-on:click="delete_expense(index)" name="expensesDelete-@{{index }}" type="button" class="btn btn-danger" >X</button>


                                        </div>
                                </td>


                            </tr>


                            </tbody>

                            <tfoot>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                  <div class="form-group pull-right">
                                                <button type="button" v-on:click="add_expense" class="btn btn-success" >add item</button>
                                            </div>


                                </td>


                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
              </div>
            </div>


      <!-- Table Section End -->

        <!-- Table Section Start -->
        <div class="admin-table add-milestone-table col-12">
            <div class="row admin-table-body">
                <div class="col">
                    <div class="table-responsive table-checkbox">
                        <h4 class="mb-4">
                        <strong>Flat Fees</strong>
                        </h4>
                        <table class="table table-sm">
                            <thead>
                            <tr>
                              <th scope="col">Item </th>

                                <th scope="col">Date </th>
                                <th scope="col">Description</th>

                                <th scope="col">Note</th>

                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Delete</th>

                            </tr>
                            </thead>
                            <tbody >
                            <tr v-for="(index,item) in selected_flat " style="height:50px">
                              <td>
                                <div class="form-group">

                                          <label for="flatItem-@{{index }}" class="form-field__label">Items</label>
                                          <select  name="flatItem-@{{ index }}"  class="form-control flatItem">
                                            <option value="">select item</option>
                                            @foreach($user->items as $item)
                                              <option value="{{$item->id}}">{{$item->getFieldByName('name')->value}}</option>
                                            @endforeach

                                          </select>
                                      </div>
                              </td>
                              <td>
                                <div class="form-group">

                                  <label for="flatDate-@{{index }}" class="form-field__label">Date</label>
                                  <input id="flatDate-@{{index }}" name="flatDate-@{{index }}" value=" "  type="date" class="form-control"
                                         placeholder="Date"  />
                                      </div>
                              </td>
                              <td>
                                <div class="form-group">

                                          <label for="flatDescription-@{{index }}" class="form-field__label">Description</label>
                                          <input id="flatDescription-@{{index }}" name="flatDescription-@{{index }}" value=" "  type="text" class="form-control"
                                                 placeholder="Description"  />
                                      </div>
                              </td>
                              <td>
                                <div class="form-group">

                                          <label for="flatNote-@{{index }}" class="form-field__label">Note</label>
                                          <input id="flatNote-@{{index }}" name="flatNote-@{{index }}" value=" "  type="text" class="form-control"
                                                 placeholder="Note"  />
                                      </div>
                              </td>
                                <td>
                                  <div class="form-group">

                                            <label for="flatRate-@{{index }}" class="form-field__label">Rate</label>
                                            <input id="flatRate-@{{index }}" name="flatRate-@{{index }}" value="0"  type="number" class="form-control flatRate"
                                                   placeholder="Rate"  />
                                        </div>
                                </td>

                                <td>
                                  <div class="form-group">

                                            <label for="flatTotal-@{{index }}" class="form-field__label">Total </label>
                                            <input id="flatTotal-@{{index }}" name="flatTotal-@{{index }}" value="0"  type="number" class="form-control"
                                                   placeholder="total" readonly />
                                       </div>
                                </td>
                                <td>
                                  <div class="form-group">

                                            <label for="flatDelete-@{{index }}" class="form-field__label">remove</label><br>
                                            <button v-on:click="delete_flat(index)" name="expensesDelete-@{{index }}" type="button" class="btn btn-danger" >X</button>


                                        </div>
                                </td>


                            </tr>


                            </tbody>

                            <tfoot>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>

                                <td>

                                </td>
                                <td>
                                  <div class="form-group pull-right">
                                                <button type="button" v-on:click="add_flat" class="btn btn-success" >add item</button>
                                            </div>


                                </td>


                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>


      <!-- Table Section End -->

          <!-- Table Section Start -->
          <div class="admin-table add-milestone-table col-12">
              <div class="row admin-table-body">
                  <div class="col">
                      <div class="table-responsive table-checkbox">
                      <span v-show="designed_milestone != 'cash'">
        <h4 class="mb-4">
        <strong>Milestones</strong>
        </h4>
                          <table class="table table-sm">
                              <thead>
                              <tr>

                                  <th scope="col">Payment %</th>
                                  <th scope="col">Payment Amount</th>
                                  <th scope="col">Type</th>

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

                                              <label for="type-@{{milestone.id }}" class="form-field__label">Type</label>
                                              <select  name="type@{{ index }}"  class="form-control">
                                                <option value="cash">Before Deliver</option>
                                                <option value="visa">After Deliver</option>

                                              </select>                                                </div>
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
                                    <!-- <div class="form-group">
                                                  <label for="milestone-table-Total " class="form-field__label">Total %</label>
                                                  <input id="milestone-table-Total " type="text" name="total" value="@{{ total }}" class="form-control"
                                                         placeholder="Total" />
                                              </div> -->

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

        <!-- Table Section End -->


                          <div class="row">

                            <div class="form-group col-md-3">
                                          <label for="Adjustment " class="form-field__label">Adjustments </label>
                                          <input id="Adjustment" v-on:change="calculate_total()" v-model="adjustment_cost" type="number" name="adjustment" value="0" class="form-control"
                                                 placeholder="Adjustments"  />
                                      </div>
                                      <div class="form-group col-md-3">

                                                <label for="adjustment-type" class="form-field__label">Adjustments Type</label>
                                                <select id="adjustment-type" v-on:change="calculate_total()" v-model="adjustment_type" name="adjustment-type"  class="form-control">
                                                  <option selected value="percent">%</option>
                                                  <option value="money">$</option>

                                                </select>

                                            </div>

                                      <div class="form-group col-md-3">
                                                    <label for="Discount " class="form-field__label">Discount </label>
                                                    <input id="Discount" v-on:change="calculate_total()" v-model="discount_cost" type="number" name="discount" value="0" class="form-control"
                                                           placeholder="Discount"  />
                                                </div>
                                                <div class="form-group col-md-3">

                                                          <label for="discount-type" class="form-field__label">Discount Type</label>
                                                          <select id="discount-type" v-on:change="calculate_total()" v-model="discount_type"  name="discount-type"  class="form-control">
                                                            <option value="percent" selected>%</option>
                                                            <option value="money">$</option>

                                                          </select>

                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                            <div class="form-group col-md-3">
                                                                            <label for="milestone-table-Total " class="form-field__label">terms and conditions </label>
                                                                          <textarea id="milestone-table-Total " type="text" name="code"  class="form-control"
                                                                                 placeholder="Total"  ></textarea>
                                                                      </div>
                                                                      <div class="form-group col-md-3">
                                                                                      <label for="milestone-table-Total " class="form-field__label">Notes </label>
                                                                                    <textarea id="milestone-table-Total " type="text" name="code"  class="form-control"
                                                                                           placeholder="Total"  ></textarea>
                                                                                </div>
                                                                              </div>

        </div>
      </div>

        </div>
        <div class="text-right font-size-18 text-dark p-4 rounded bg-light">
          <div>Items price: <span class="font-weight-bold">@{{items_price.toFixed(2)}} AED</span></div>
          <div>Time Entries amount: <span class="font-weight-bold">@{{times_price.toFixed(2)}} AED</span></div>
          <div>Expense Entries amount: <span class="font-weight-bold">@{{expenses_price.toFixed(2)}} AED</span></div>
          <div>Flat Fees amount: <span class="font-weight-bold">@{{flat_price.toFixed(2)}} AED</span></div>
          <div>adjustment amount: <span class="font-weight-bold">@{{adjustment_calculated.toFixed(2)}} AED</span></div>
          <div>discount amount: <span class="font-weight-bold">@{{discount_calculated.toFixed(2)}} AED</span></div>

        <div>Sub - Total amount: <span class="font-weight-bold">@{{total.toFixed(2)}} AED</span></div>
        <!-- <a href="javascript: void(0);" class="btn btn-success mt-3 px-5">Proceed Payment</a> -->
        </div>









            <div class="form-actions">
              <button type="submit" class="btn btn-success px-5">Submit</button>
              <a type="button" href="{{url()->previous()}}" class="btn btn-default px-5">Cancel</a>
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

function itemsCalculations(){
  $(document).ready(function(){
    $('.itemsItem').change(function(){
      var index = $(this).attr('name').split('-')[1];

      if($(this).val() == ''){
        app.items_price -= parseInt($("#itemsAmount-"+index).val());
        $("#itemsAmount-"+index).val(0);
        $("#itemsRate-"+index).val(0);
        $("#itemsTax-"+index).val(0);
        app.calculate_total()

      }
      else{
      var item = app.itemsData.find(item => item.id ==$(this).val());
      $("#itemsRate-"+index).val(item.price);
      app.items_price -= parseInt($("#itemsAmount-"+index).val());
      $("#itemsAmount-"+index).val((((100 + parseInt($("#itemsTax-"+index).val()))/100) * parseInt(item.price)).toFixed(2)  );
      app.items_price += parseInt($("#itemsAmount-"+index).val());
      app.calculate_total()

    }
    })
    $(".itemsTax").change(function(){
      var index = $(this).attr('name').split('-')[1];
      var price = $("#itemsRate-"+index).val();
      app.items_price -= parseInt($("#itemsAmount-"+index).val());
      $("#itemsAmount-"+index).val((((100 + parseInt($("#itemsTax-"+index).val()))/100) * parseInt(price)).toFixed(2) );
      app.items_price += parseInt($("#itemsAmount-"+index).val());
      app.calculate_total()

    })

  })

}

function timesCalculations(){
  $(document).ready(function(){
    $('.times').change(function(){
      var index = $(this).attr('name').split('-')[1];

      var rate = $("#timesRate-"+index).val();
      var hours = $("#timesHours-"+index).val();

      app.times_price -= parseInt($("#timesTotal-"+index).val());
      $("#timesTotal-"+index).val((parseInt(rate) * parseInt(hours)).toFixed(2));
      app.times_price += parseInt($("#timesTotal-"+index).val());
      app.calculate_total()
    })

  })

}
function expensesCalculations(){
  $(document).ready(function(){
    $('.expenses').change(function(){
      var index = $(this).attr('name').split('-')[1];

      var cost = $("#expensesCost-"+index).val();
      var quantity = $("#expensesQty-"+index).val();

      app.expenses_price -= parseInt($("#expensesTotal-"+index).val());
      $("#expensesTotal-"+index).val((parseInt(cost) * parseInt(quantity)).toFixed(2));
      app.expenses_price += parseInt($("#expensesTotal-"+index).val());
      app.calculate_total()
    })

  })

}
function flatCalculations(){
  $(document).ready(function(){
    $('.flatItem').change(function(){
      var index = $(this).attr('name').split('-')[1];

      if($(this).val() == ''){
        app.flat_price -= parseInt($("#flatTotal-"+index).val());
        $("#flatTotal-"+index).val(0);
        $("#flatRate-"+index).val(0);
        app.calculate_total()

      }
      else{
      var item = app.itemsData.find(item => item.id ==$(this).val());
      $("#flatRate-"+index).val(item.price);
      app.flat_price -= parseInt($("#flatTotal-"+index).val());
      $("#flatTotal-"+index).val(item.price.toFixed(2)  );
      app.flat_price += parseInt($("#flatTotal-"+index).val());
      app.calculate_total()

    }
    })

    $(".flatRate").change(function(){
      var index = $(this).attr('name').split('-')[1];
      var price = $("#flatRate-"+index).val();
      app.flat_price -= parseInt($("#flatTotal-"+index).val());
      $("#flatTotal-"+index).val(parseInt(price).toFixed(2) );
      app.flat_price += parseInt($("#flatTotal-"+index).val());
app.calculate_total()

    })

  })

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
                items:[],
                code:Math.floor(100000 + Math.random() * 900000),
                itemsData:{!!json_encode($user->items)!!},
                selected_items:[{},{}],
                items_price:0,
                selected_times:[{}],
                times_price:0,
                selected_expenses:[{}],
                expenses_price:0,
                selected_flat:[{}],
                flat_price:0,
                total:0,
                adjustment_cost:0,
                adjustment_type:'percent',
                discount_cost:0,
                discount_type:'percent',
                adjustment_calculated:0,
                discount_calculated:0



            }
        },

        created() {
            // console.log(JSON.stringify(this.leads[0]))
            // window.alert = function() {};

            $(document).ready(function () {
itemsCalculations();
timesCalculations();
expensesCalculations();
flatCalculations();

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
          add_item(){
            app.selected_items.push({});
            itemsCalculations()
          },
          delete_item(index){
            app.items_price -= parseInt($("#itemsAmount-"+index).val());

            app.selected_items.splice(index,1);

          },
          add_flat(){
            app.selected_flat.push({});
            flatCalculations()
          },
          delete_flat(index){
            app.flat_price -= parseInt($("#flatTotal-"+index).val());

            app.selected_flat.splice(index,1);

          },
          add_time(){
            app.selected_times.push({});
            timesCalculations()
          },
          delete_time(index){
            app.times_price -= parseInt($("#timesTotal-"+index).val());

            app.selected_times.splice(index,1);

          },
          add_expense(){
            app.selected_expenses.push({});
            expensesCalculations()
          },
          delete_expense(index){
            app.expenses_price -= parseInt($("#expensesTotal-"+index).val());

            app.selected_expenses.splice(index,1);

          },
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
             calculate_total(){
              var total = parseInt(this.items_price) + parseInt(this.times_price) + parseInt(this.expenses_price)+ parseInt(this.flat_price);
              if(this.discount_type == 'percent'){
                this.discount_calculated = parseInt(total) * parseFloat(this.discount_cost/100);
              }
              else {
                this.discount_calculated = parseInt(this.discount_cost);
              }
              if(this.adjustment_type == 'percent'){
                this.adjustment_calculated = parseFloat(total) * parseFloat(this.adjustment_cost/100);
              }
              else {
                this.adjustment_calculated = parseFloat(this.adjustment_cost);
              }
              this.total = parseFloat(parseInt(total) + parseFloat(this.adjustment_calculated) - parseFloat(this.discount_calculated));
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
