<div class="detalhepagamento">
    <div class="detpagamentos">
            <h2>VISA XXXXXXXXXXXXXX 4567</h2>
    </div>
    <div class="metodopagamento-body">
        <form action='' method="POST">
            <div class="input-field">
                <label>Titular *</label>
                <input type="text" name="nometitular" id="nometitular" placeholder="Info da BD" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label>Nº Cartão *</label>
                <input type="text" name="ncartao" maxlength="16" pattern="([0-9]{16})" id="ncartao" style="width:100%; " placeholder="Info da BD" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label>Mês *</label>
                <select name="mes" id="mes" required>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                </select>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label>Ano *</label>
                <select name="mes" id="mes" required>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                </select>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label>CVV2 *</label>
                <input type="text" name="cvv" id="cvv" maxlength="3" pattern="([0-9]{3})" placeholder="Info da BD" style="width:100%;" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label></label>
                <input type="number" name="none" id="none">
            </div>
            <div class="guardaralteracoes">
                <div class="guardaral">
                    <button type="submit" class="btn btn-primary">
                        Atualizar Dados
                    </button>
                </div>
                <div class="eliminar">
                    <button type="" class="btn btn-primary">
                        Eliminar Método Pagamento
                    </button>
                </div>
            </div>
        </form>        
    </div>
</div>


    